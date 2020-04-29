<?php


namespace App\Config;


use App\Config\Loaders\Loader;

class Config
{
    protected $config = [];

    protected $cache = [];


    public function load($loaders){
        foreach ($loaders as $loader){
            if(!$loader instanceof Loader){
                continue;
            }

            $this->config = array_merge($this->config,$loader->parse());
        }

        return $this;
    }

    public function get($key){
        if($this->inCache($key)){
            return $this->fromCache($key);
        }

        return $this->toCache($key,$this->extract($key));
    }

    protected function extract($key){
        $config = $this->config;

        foreach(explode('.',$key) as $segment){
            if($this->exists($config,$segment)){
                $config = $config[$segment];
                continue;
            }
        }
        return $config;
    }

    protected function toCache($key,$value){
        $this->cache[$key] = $value;

        return $value;
    }

    protected function fromCache($key){
        return $this->cache[$key];
    }

    protected function inCache($key){
        //v.2 - isset($this->cache[$key]);
        return in_array($key,$this->cache,true);
    }

    protected function exists($config,$segment){
        return array_key_exists($segment,$config);
    }
}