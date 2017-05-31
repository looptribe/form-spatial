Form Spatial Bundle
========================================================

Spatial support for Symfony2 forms with Google Maps.

[![Package version](https://img.shields.io/packagist/vpre/looptribe/form-spatial.svg?style=flat-square)](https://packagist.org/packages/looptribe/form-spatial)

This package is a Symfony2 forms integration of [creof/doctrine2-spatial](https://github.com/creof/doctrine2-spatial).
It adds a new form type `point` to edit spatial `Point` types with Google Maps.


## Installation
``` bash
$ php composer.phar require looptribe/form-spatial dev-master
```

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Looptribe\FormSpatialBundle\LooptribeFormSpatialBundle(),
        // ...
    );
}
```

``` yml
# app/config/parameters.yml
parameters:
    looptribe.formspatial.google_maps_api_key: YOUR_API_KEY
```

## Usage
When you create a form set your Point field type as `Looptribe\FormSpatialBundle\Form\Type\PointType`:
``` php
<?php
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ...
            ->add('location', Looptribe\FormSpatialBundle\Form\Type\PointType::class)
            // ...
        ;
    }
```

## Development
At the moment only the geography `Point` type is supported.
