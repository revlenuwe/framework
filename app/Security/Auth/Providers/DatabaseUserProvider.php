<?php


namespace App\Security\Auth\Providers;


use App\Models\Model;
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

    public function retrieveByIdentifier($identifier) {
        return $this->db->getRepository(User::class)->findOneBy(['remember_identifier' => $identifier]);
    }

    public function retrieveByUsername($name,$username){
        return $this->db->getRepository(User::class)->findOneBy([$name => $username]);
    }

    public function clearUserRememberData($user){
        $this->retrieveById($user->id)->update([
            'remember_identifier' => null,
            'remember_token' => null
        ]);
        $this->db->flush();
    }

}