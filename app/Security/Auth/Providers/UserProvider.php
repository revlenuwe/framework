<?php


namespace App\Security\Auth\Providers;


interface UserProvider
{
    public function retrieveById($id);

    public function retrieveByToken($id);

    public function retrieveByUsername($name,$username);
}