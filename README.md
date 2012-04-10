BaitPollBundle
==============

This bundle provides support for various types of polls and competitions for Symfony2.

[![Build Status](https://secure.travis-ci.org/bait-sk/BaitPollBundle.png?branch=master)](http://travis-ci.org/bait-sk/BaitPollBundle)


Features
--------

- almost none at the moment


Todo
----

- at least some features


Quick install
-------------

Add the following to your `deps` file:

```
[BaitPollBundle]
    git=https://github.com/bait-sk/BaitPollBundle.git
    target=bundles/Bait/PollBundle
```

``` bash
$ php bin/vendors install
```

``` php
<?php
// app/autoload.php

$loader->registerNamespaces(array(
    // ...
    'Bait' => __DIR__.'/../vendor/bundles',
));
```

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Bait\PollBundle\BaitPollBundle(),
    );
}
```
