<?php

namespace Looptribe\FormSpatialBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Looptribe\FormSpatialBundle\Form\DataTransformer\PointTransformer;

class PointType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new PointTransformer());
    }

    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'point';
    }

}
