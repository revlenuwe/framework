<?php


namespace App\Security\Auth\Providers;


interface UserProvider
{
    public function retrieveById($id);

    public function retrieveByIdentifier($identifier);

    public function retrieveByUsername($name,$username);
}