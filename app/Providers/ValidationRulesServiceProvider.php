<?php


namespace App\Providers;


use App\Requests\Rules\ExistsRule;
use Doctrine\ORM\EntityManager;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;
use Valitron\Validator;

class ValidationRulesServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{



    public function boot(){
        $container = $this->getContainer();

        Validator::addRule('exists',function($field,$value,$params,$fields) use ($container){
            return (new ExistsRule($container->get(EntityManager::class)))->validate($field,$value,$params,$fields);
        },'already uses');
    }


    public function register(){

    }
}