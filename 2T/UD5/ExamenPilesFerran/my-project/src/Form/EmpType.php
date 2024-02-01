<?php

namespace App\Form;

use App\Entity\Dept;
use App\Entity\Emp;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('apellidos')
            ->add('oficio')
            ->add('jefe')
            ->add('salario')
            ->add('comision')
            ->add('fecha_alta')
            ->add('dept_no', EntityType::class, [
                'class' => Dept::class,
                'choice_label' => 'id',
            ])
            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'submit'],
            ]);;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Emp::class,
        ]);
    }
}
