Stomp enabled Messaging
=======================

This bundle provides a service calles blage_stomp.broker. This service is a 
connection aimed to read and write messages to a [Stomp](http://stomp.github.com/) capable Message Broker

Installation
------------

**Via the deps logic of Symfony**

Add the following lines to your deps file.

    [stomp-php]
      git=http://github.com/dejanb/stomp-php.git
      target=/fusesource/stomp-php

    [BlageConnectBundle]
        git=git://github.com/monofone/BlageConnectBundle.git
        target=/bundles/Blage/ConnectBundle

Add the following namespaces to your autoload.php

    autoload.php
    'Blage'      => __DIR__.'/../vendor/bundles',
    'FuseSource' => __DIR__.'/../vendor/bundles/fusesource/stomp-php/src/main',

Don´t miss to enable the bundle in your registerBundles method in the Kernel

    AppKernel.php  
    ...
    new Blage\StompBundle\BlageStompBundle(),
    ...


**Via composer**

    {
      "require": {
         "blage/stompbundle" : "1.0.0"
      }
    }

If the composer autoloader is used only the bundle has to be enabled in 
the Kernel

Use the Broker
--------------

Examples on how to use the Stomp client can be found 
[here](http://stomp.fusesource.org/documentation/php/book.html)