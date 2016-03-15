<?php

namespace BloodCenter\EntityBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AnnouncementAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('bloodGroup')
            ->add('rhesusFactor')
            ->add('quantity')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('bloodGroup')
            ->add('rhesusFactor')
            ->add('quantity')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('bloodGroup', 'choice', array(
                'choices'  => array(
                    '1' => "1 группа",
                    '2' => "2 группа",
                    '3' => "3 группа",
                    '4' => "4 группа",
                )
            ))
            ->add('rhesusFactor', 'choice', array(
                'choices' => array(
                    '+' => "положительный",
                    '-' => "отрицательный",
                )
            ))
            ->add('quantity')

        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('bloodGroup')
            ->add('rhesusFactor')
            ->add('quantity')
            ->add('createdAt')

        ;
    }
}
