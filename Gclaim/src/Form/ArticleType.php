<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Commentaire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('image')
//            ->add('createAt')
//            ->add('commentaires',EntityType::class,['class'=>Commentaire::class,'choice_label'])
            ->add('image',FileType::class,array('label'=>'inserer une image','data_class' => null))
            ->add('confirmer',SubmitType::class)
            ->add('savoir',SubmitType::class)


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
