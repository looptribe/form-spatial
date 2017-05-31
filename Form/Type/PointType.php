<?php

namespace Looptribe\FormSpatialBundle\Form\Type;

use Looptribe\FormSpatialBundle\Form\DataTransformer\PointTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class PointType extends AbstractType
{
    /**
     * @var string Google Maps JS API key
     */
    protected $googleMapsApiKey;

    /**
     * @param string $googleMapsApiKey
     */
    public function __construct($googleMapsApiKey)
    {
        $this->googleMapsApiKey = $googleMapsApiKey;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new PointTransformer());
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view, $form, $options);

        $view->vars = array_replace($view->vars, array(
            'google_maps_api_key' => $this->googleMapsApiKey,
        ));
    }

    public function getParent()
    {
        return TextType::class;
    }

    public function getName()
    {
        return 'point';
    }
}
