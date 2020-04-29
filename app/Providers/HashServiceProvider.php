<?php


namespace App\Providers;


use App\Security\Hash;
use App\Session\Session;
use App\Session\SessionStorage;
use Laminas\Crypt\Password\Bcrypt;
use League\Container\ServiceProvider\AbstractServiceProvider;

class HashServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Bcrypt::class
    ];


    public function register(){
        $container = $this->getContainer();

        $container->share(Bcrypt::class,function () {//Переписать под себя,хули
            return new Bcrypt([
                'cost' => 12
            ]);
        });


    }
}