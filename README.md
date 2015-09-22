Form Spatial Bundle
========================================================

Spatial support for Symfony2 forms with Google Maps.

[![Package version](https://img.shields.io/packagist/vpre/looptribe/form-spatial.svg?style=flat-square)](https://packagist.org/packages/looptribe/form-spatial)

This package is a Symfony2 forms integration of [djlambert/doctrine2-spatial](https://github.com/djlambert/doctrine2-spatial).


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

## Usage
When you create a form simply add the correct field type:
``` php

<?php
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ...
            ->add('location', 'point')
            // ...
        ;
    }
```

## Development
At the moment only the Point type is supported.
