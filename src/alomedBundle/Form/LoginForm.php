<?php


namespace alomedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
class LoginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Email',TextareaType::class,[
                'attr' => ['class' => 'box '],
                'label'=>'Email ',
                'required'=>False,])
            ->add('password',TextareaType::class,[
                'attr' => ['class' => 'box '],
                'label'=>'Password ',
                'required'=>False,])
            ->add('save', SubmitType::class, [
                'attr' => ['class' =>' btn btn-success'],
                'label'=>'Login'
            ]);
        ;
    }
    public function getName(){

        return "Modele";
    }
}