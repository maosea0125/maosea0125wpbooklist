<?php

use Symfony\Bridge\Twig\Form\TwigRenderer;
use Symfony\Bridge\Twig\Form\TwigRendererEngine;
use Symfony\Component\Form\Extension\Core\CoreExtension;
use Symfony\Component\Form\Extension\Csrf\CsrfExtension;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\Security\Csrf\CsrfTokenManager;
use Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator;
use Symfony\Component\Security\Csrf\TokenStorage\NativeSessionTokenStorage;
use Symfony\Component\Validator\Validation;
use Symfony\Bridge\Twig\Extension\FormExtension;

class BaseController
{
    protected $twig = null;
    protected $formFactory = null;
    protected $csrfManager = null;

    public function __construct(){
        $csrfGenerator = new UriSafeTokenGenerator();
        $csrfStorage = new NativeSessionTokenStorage();
        $this->csrfManager = new CsrfTokenManager($csrfGenerator, $csrfStorage);
    }

    function getTwig(){
        if(!$this->twig){
            // 初始化Twig
            $loader = new Twig_Loader_Filesystem(array(
                MAOSEA0125_WP_BOOKLIST_DIR . DS . 'templates',
                MAOSEA0125_WP_BOOKLIST_DIR . DS . 'templates' . DS . 'Form',
            ));
            $twig = new Twig_Environment($loader, array(
                'debug' => true,
                'cache' => MAOSEA0125_WP_BOOKLIST_DIR . DS . 'cache',
            ));
            $twig->clearCacheFiles();
            $twig->addExtension(new Twig_Extension_Debug());

            $defaultFormTheme = 'form_div_layout.html.twig';
            $formEngine = new TwigRendererEngine(array($defaultFormTheme), $twig);
            $twig->addRuntimeLoader(new \Twig_FactoryRuntimeLoader(array(
                TwigRenderer::class => function () use ($formEngine, $csrfManager) {
                    return new TwigRenderer($formEngine, $csrfManager);
                },
            )));
            $twig->addExtension(new FormExtension());

            $this->twig = $twig;
        }
        return $this->twig;
    }

    function getFormFactory(){
        if(!$this->form){
            $formFactory = Forms::createFormFactoryBuilder()
                ->addExtension(new CoreExtension())
                ->addExtension(new HttpFoundationExtension())
                //->addExtension(new CsrfExtension($this->csrfManager))
                ->addExtension(new ValidatorExtension(Validation::createValidator()))
                ->getFormFactory();
            $this->formFactory = $formFactory;
        }
        return $this->formFactory;
    }
}