<?php


namespace App\Security\Auth\Providers;


use App\Models\User;
use Doctrine\ORM\EntityManager;

class DatabaseUserProvider implements UserProvider
{
    protected $db;
    public function __construct(EntityManager $db){
        $this->db = $db;
    }

    public function retrieveById($id){
        return $this->db->getRepository(User::class)->find($id);
    }

    public function retrieveByToken($token){
        return $this->db->getRepository(User::class)->findOneBy(['remember_token' => $token]);//update
    }

    public function retrieveByUsername($name,$username){
        return $this->db->getRepository(User::class)->findOneBy([$name => $username]);//update
    }

}