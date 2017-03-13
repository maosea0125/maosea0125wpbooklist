<?php

use Propel\Runtime\Util\PropelModelPager;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Book extends BaseController
{
    public function indexAction($request){
        $books = WpMaosea0125BookQuery::create();
        $pagination = new PropelModelPager($books, 20);
        $currentPager = $request->query->get('pager') ? intval($request->query->get('pager')) : 1;
        $pagination->setPage($currentPager);
        $pagination->init();

        return $this->getTwig()->display('list.html', array(
            'pagination' => $pagination,
            'message' => $request->getSession()->getFlashBag()->get('message'),
        ));
    }

    public function editAction($request){
        $id = $request->query->get('id') ? $request->query->get('id') : $request->request->get('id');
        $book = WpMaosea0125BookQuery::create()->findOneById($id);
        if(!$book) $book = new WpMaosea0125Book();

        $form = $this->getFormFactory()->createBuilder(BooKType::class, $book)
            ->getForm();
        if("POST" == $request->getMethod()){
            $form->handleRequest( $request );

            $cover = wp_handle_upload($_FILES['cover'], array( 'test_form' => false ));
            if( $cover && !isset( $cover['error'] ) ) {
                $book->setCover($cover['url']);
            }else{
                $form->get('cover')->addError(new FormError($cover['error']));
            }

            if ($form->isValid()) {
                // 验证通过
                $book->save();

                $response = new RedirectResponse('admin.php?page=maosea0125_book');
                return $response->send();
            }else{
                // var_dump($form->getErrors(true, true));exit;
                // $errors = $form->get('name')->getErrors();
                // var_dump($errors->count());exit;
            }
        }

        return $this->getTwig()->display('edit.html', array(
            'book' => $book,
            'form' => $form->createView(),
        ));
    }

    public function deleteAction($request){
        $book = WpMaosea0125BookQuery::create()->findById($request->query->get('id'));
        if($book){
            $book->delete();
        }

        $flashbag = $request->getSession()->getFlashBag();
        $flashbag->set('message', '删除成功');

        $response = new RedirectResponse('admin.php?page=maosea0125_book');
        return $response->send();
    }
}