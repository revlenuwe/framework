<?php


namespace App\Providers;


use App\Cookie\Cookie;
use League\Container\ServiceProvider\AbstractServiceProvider;

class CookieServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Cookie::class
    ];

    public function register(){
        $container = $this->getContainer();

        $container->share(Cookie::class,function () use ($container){
            return new Cookie();
        });
    }
}