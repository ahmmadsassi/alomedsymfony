<?php


namespace alomedBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class Formordonnance extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('text',TextareaType::class,[
                'attr' => ['class' => 'form-control '],
                'label'=>'Medicaments ',
                'required'=>False,])
            ->add('save', SubmitType::class, [
                'attr' => ['class' =>' btn btn-success'],
                'label'=>'save'
            ]);
    }
    public function getName(){

        return "Modele";
    }



}