<?php


namespace alomedBundle\Form;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class Medicammentform extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('medicament',EntityType::class,array('class'=>'alomedBundle\Entity\Medicaments','choice_label'=>'nom','expanded'=>'true'))
            ->add('save', SubmitType::class, [
                'attr' => ['class' =>' btn btn-success'],
                'label'=>'Tarif'
            ]);
    }
    public function getName(){

        return "Modele";
    }
}