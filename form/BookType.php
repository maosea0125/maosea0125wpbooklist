<?php

use Symfony\Bridge\Propel1\Form\Type\TranslationCollectionType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormError;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Form\Extension\Core\Type as Type;

class BooKType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $data = $builder->getData();

        $builder->add('id', Type\HiddenType::class);

        $builder->add('isbn', Type\TextType::class, 
            array(
                'label' => 'ISBN',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control',
                ),
                'constraints' => array(
                    new Assert\NotBlank(
                        array(
                            'message' => 'ISBN不能为空',
                        )
                    ),
                ),
            )
        );

        $builder->add('name', Type\TextType::class, 
            array(
                'label' => '名称',
                'required' => true,
                'attr' => array(
                    'class' => 'form-control',
                ),
                'constraints' => array(
                    new Assert\NotBlank(
                        array(
                            'message' => '名称不能为空',
                        )
                    ),
                ),
            )
        );

        $builder->add('cover', Type\FileType::class, 
            array(
                'label' => '书籍封面',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );

        $builder->add('author', Type\TextType::class, 
            array(
                'label' => '书籍作者',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );

        $builder->add('publisher', Type\TextType::class, 
            array(
                'label' => '出版社',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );

        $builder->add('original_name', Type\TextType::class, 
            array(
                'label' => '原书名称',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );

        $builder->add('translator', Type\TextType::class, 
            array(
                'label' => '翻译',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );

        $builder->add('publish_date', Type\DateType::class, 
            array(
                'label' => '发布时间',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            )
        );

        $builder->add('page', Type\TextType::class, 
            array(
                'label' => '页数',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );

        $builder->add('price', Type\TextType::class, 
            array(
                'label' => '售价',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );

        $builder->add('series', Type\TextType::class, 
            array(
                'label' => '系列',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );

        $builder->add('description', Type\TextareaType::class,
            array(
                'label' => '描述',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );

        $builder->add('author_description', Type\TextareaType::class,
            array(
                'label' => '作者描述',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );

        $builder->add('buylink', Type\TextType::class,
            array(
                'label' => '购买地址',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );

        $builder->add('douban_score', Type\TextType::class,
            array(
                'label' => '豆瓣评分',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                ),
            )
        );
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver){
        $resolver->setDefaults(array(
            'csrf_protection' => false,
        ));
    }

    public function getBlockPrefix(){
        return '';
    }
}