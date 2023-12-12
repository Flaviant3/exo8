<?php
// src/Form/PostType.php

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Auteur;

class PostType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder
// Autres champs du formulaire
->add('auteur', EntityType::class, [
'class' => Auteur::class,
'choice_label' => 'NomComplet', // Assurez-vous davoir une méthode getNomComplet() dans votre entité Auteur
]);
}

public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults([
'data_class' => Post::class,
]);
}
}
?>