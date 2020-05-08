<?php


namespace App\Cookie;


class Cookie
{

    protected $domain = null;

    protected $path = '/';

    protected $secure = false;

    protected $httponly = true;

    public function set($key,$value,$minutes = 60){
        $expire = time() + ($minutes * 60);

        setcookie($key,$value,$expire,$this->path,$this->domain,$this->secure,$this->httponly);

        return $value;
    }

    public function get($key,$default = null){
        return $this->exists($key) ? $_COOKIE[$key] : $default;
    }

    public function exists($key){
        return isset($key) && !empty($_COOKIE[$key]);
    }

    public function remove(...$keys){
        foreach($keys as $key){
            $this->set($key,null,time() - 10000);
        }
    }

    public function forever($key,$value){
        return $this->set($key,$value,90000000);
    }
}