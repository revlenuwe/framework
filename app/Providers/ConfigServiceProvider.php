<?php


namespace App\Providers;


use App\Config\Config;
use App\Config\Loaders\ArrayLoader;
use App\Views\View;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ConfigServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        'config'
    ];


    public function register(){
        $container = $this->getContainer();

        $container->share('config',function () {
            $loader = new ArrayLoader([
                'app' => base_path('config/app.php'),
                'cache' => base_path('config/cache.php'),
                'db' => base_path('config/db.php'),
            ]);//foreach it


            return (new Config())->load([$loader]);
        });


    }
}