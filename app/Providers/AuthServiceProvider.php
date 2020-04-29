<?php


namespace App\Providers;


use App\Security\Auth\Auth;
use App\Security\Auth\Providers\DatabaseUserProvider;
use App\Session\SessionStorage;
use Doctrine\ORM\EntityManager;
use Laminas\Crypt\Password\Bcrypt;
use League\Container\ServiceProvider\AbstractServiceProvider;

class AuthServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        Auth::class
    ];


    public function register(){
        $container = $this->getContainer();

        $container->share(Auth::class,function () use ($container) {
            $provider = new DatabaseUserProvider($container->get(EntityManager::class));//get from config
            return new Auth(
                $provider,
                $container->get(Bcrypt::class),
                $container->get(SessionStorage::class),
            );
        });


    }
}