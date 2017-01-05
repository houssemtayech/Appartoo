<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/01/17
 * Time: 12:19 ص
 */

namespace Appartoo\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('age')->add('famille')->add('race')->add('nourriture');
        
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_profile';
    }
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}