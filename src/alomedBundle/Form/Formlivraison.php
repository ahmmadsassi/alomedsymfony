<?php


namespace alomedBundle\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class Formlivraison extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('patient',EntityType::class,array('class'=>'alomedBundle\Entity\Patient','choice_label'=>'nom'))
            ->add('pharmacie',EntityType::class,array('class'=>'alomedBundle\Entity\Pharmacie','choice_label'=>'nom'))
            ->add('livreur',EntityType::class,array('class'=>'alomedBundle\Entity\livreur','choice_label'=>'nom'))
            ->add('Datelivraison', DateTimeType::class,[
                'attr' => ['class' => 'form-control js-datepicker'],
                'label'=>'Date de livraison ',
                'required'=>False,
                'widget'=>'single_text',
                'html5'=>False,
                'format'=>'MM/dd/yyyy'])
            ->add('tarif',TextareaType::class,[
                'attr' => ['class' => 'form-control '],
                'label'=>'Tarif ',
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