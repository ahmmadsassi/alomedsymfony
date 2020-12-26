<?php


namespace alomedBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\VarDumper\Tests\Fixtures\DateTimeChild;

class ModeleFormMedecin extends  AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextareaType::class,[
                 'attr' => ['class' => 'form-control '],
                'label'=>'Nom ',
                'required'=>False,])
            ->add('prenom',TextareaType::class,[
                'attr' => ['class' => 'form-control '],
                'label'=>'Prenom ',
                'required'=>False,])
            ->add('DateDeNaissance', DateTimeType::class,[
                'attr' => ['class' => 'form-control js-datepicker'],
                'label'=>'Date de naissance ',
                'required'=>False,
                'widget'=>'single_text',
                'html5'=>False,
                'format'=>'MM/dd/yyyy'
            ])
            ->add('email',TextareaType::class,[
                'attr' => ['class' => 'form-control '],
                'label'=>'Email ',
                'required'=>False,])
            ->add('password',TextareaType::class,[
                'attr' => ['class' => 'form-control '],
                'label'=>'Password ',
                'required'=>False,])
            ->add('telephone',TextareaType::class,[
                'attr' => ['class' => 'form-control '],
                'label'=>'Telephone ',
                'required'=>False,])
            ->add('addresse_cabinet',TextareaType::class,[
                'attr' => ['class' => 'form-control '],
                'label'=>'addresse_cabinet ',
                'required'=>False,])
            ->add('save', SubmitType::class, [
                'attr' => ['class' =>' btn btn-success'],
                'label'=>'Create'
            ]);
    }
    public function getName(){

        return "Modelemedecin";

    }

}