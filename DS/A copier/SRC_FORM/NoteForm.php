<?php

namespace App\Form;

use App\Entity\Etat;
use App\Entity\Note;
use App\Entity\Tag;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
         

        $builder
            ->add('titre')
            ->add('description')
            ->add('endAt', null, [
                'widget' => 'single_text',
            ])
            ->add('priorite')
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nom', // 👈 plus lisible que l'ID
            ])
            ->add('etat', EntityType::class, [
                'class' => Etat::class,
                'choice_label' => 'nom', // 👈 ou 'name', selon ton entité
            ])
            ->add('tags', EntityType::class, [
                'class' => Tag::class,
                'choice_label' => 'nom', // 👈 ou 'label' ou ce que tu veux
                'multiple' => true,
                'expanded' => true, 
            ]);
    }      

    



    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Note::class,
        ]);
    }
}
