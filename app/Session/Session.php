<?php


namespace App\Session;


class Session implements SessionStorage
{
    public function set($key,$value = null){
        if(is_array($key)){
            foreach ($key as $s_key => $s_value){
                $_SESSION[$s_key] = $s_value;
            }
            return $key;
        }

        $_SESSION[$key] = $value;
        return $value;
    }

    public function get($key,$default = null){
        if($this->exists($key)){
            return $_SESSION[$key];
        }
        return $default;
    }

    public function exists($key){
        return isset($_SESSION[$key]);
    }

    public function remove(...$keys){
        foreach ($keys as $key){
            unset($_SESSION[$key]);
        }
    }
}