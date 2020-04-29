<?php

use App\Controllers\Controller;
use App\Providers\ConfigServiceProvider;
use League\Container\ReflectionContainer;
use League\Route\Router;

$container = new \League\Container\Container();

$container->delegate(
    new ReflectionContainer()
);


$container->addServiceProvider(new ConfigServiceProvider());

foreach ($container->get('config')->get('app.providers') as $provider){
    $container->addServiceProvider(new $provider());
}

