<?php


namespace App\Providers;


use App\Session\Session;
use App\Session\SessionStorage;
use App\Views\View;
use League\Container\ServiceProvider\AbstractServiceProvider;


class SessionServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        SessionStorage::class
    ];


    public function register(){
        $container = $this->getContainer();

        $container->share(SessionStorage::class,function () {
            return new Session();
        });


    }
}