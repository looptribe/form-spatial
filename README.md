Sonata Spatial Bundle
========================================================

Spatial support for Sonata Admin with Google Maps

This package is a Sonata Admin integration of [djlambert/doctrine2-spatial](https://github.com/djlambert/doctrine2-spatial).


## Installation
``` bash
$ php composer.phar require looptribe/spatial-bundle dev-master
```

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Looptribe\SonataSpatialBundle\LooptribeSonataSpatialBundle(),
        // ...
    );
}
```

## Usage
Simply add to your Sonata admin class
``` php
// src/Looptribe/MyBundle/Admin/FooAdmin.php

<?php

// Fields to be shown on create/edit forms
protected function configureFormFields(FormMapper $formMapper)
{
    $formMapper
        // ...
        ->add('location', 'point')
        // ...
    ;
}
```

## Development
At the moment only the Point type is supported.
