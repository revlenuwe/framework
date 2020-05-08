<?php


namespace App\Security\Auth;


class Recaller
{

    public function identifier($hash){
        return is_string($hash) ? explode('|',$hash)[0] : null;
    }

    public function token($hash){
        return is_string($hash) ? explode('|',$hash)[1] : null;
    }

    public function generate(){
        return [
            $this->setIdentifier(),
            $this->setToken(),
        ];
    }

    public function generateValue($identifier,$token){
        return $identifier . '|' . $token;
    }

    public function generateRememberTokenHash($token){
        return hash('sha256',$token);
    }

    public function setToken(){
        return $this->random(64);
    }

    public function setIdentifier(){
        return $this->random(16);
    }

    public function validateToken($token,$hashed){
        return $this->generateRememberTokenHash($token) === $hashed;
    }

    protected function random(int $length){
        return bin2hex(random_bytes($length));
    }
}