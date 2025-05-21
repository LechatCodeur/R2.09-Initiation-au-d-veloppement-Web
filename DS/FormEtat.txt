<?php

namespace App\Form;

use App\Entity\Etat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

// On doit ajouter le support pour la couleur, pour qu'on puisse la choisir dans le formulaire sans entrer la valeur hexadécimale
use Symfony\Component\Form\Extension\Core\Type\ColorType;


class EtatForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('couleur', ColorType::class, [
                'label' => 'Couleur',
                'attr' => [
                    'class' => 'color-picker',
                    'required' => true,
                    'html5' => true,
                ],
            ])
        ;
    }
}
