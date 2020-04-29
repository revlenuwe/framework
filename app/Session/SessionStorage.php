<?php


namespace App\Session;


interface SessionStorage
{
    public function set($key,$value);

    public function get($key);

    public function exists($key);

    public function remove(...$keys);
}