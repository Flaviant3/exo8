<?php
// src/Form/AuteurType.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuteurType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
->add('Nom')
->add('Prenom')
->add('Email')
->add('droit');
}

public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults([
'data_class' => 'App\Entity\Auteur', // Assurez-vous que le chemin est correct
]);
}
}
?>