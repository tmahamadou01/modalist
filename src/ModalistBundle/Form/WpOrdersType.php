<?php

namespace ModalistBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WpOrdersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numOrder')
            ->add('productsRef')
            ->add('buyerName')
            ->add('buyerEmail')
            ->add('shippingAddress')
            ->add('shippingZipcode')
            ->add('shippingCity')
//            ->add('orderDate', 'datetime')
//            ->add('orderState')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ModalistBundle\Entity\WpOrders'
        ));
    }
}
