<?php


namespace App\Security;


use App\Session\SessionStorage;
use Psr\Http\Message\ServerRequestInterface;

class Csrf
{
    protected $session;

    public function __construct(SessionStorage $session){
        $this->session = $session;
    }

    public function token(){
        $token = bin2hex(random_bytes(36));
        $this->session->set($this->key(),$token);

        return $token;
    }

    public function getTokenFromRequest(ServerRequestInterface $request){
        return $request->getParsedBody()[$this->key()] ?? null;
    }

    public function tokenMatch($token){
        return $token === $this->session->get($this->key());
    }

    public function key(){
        return '_token';
    }
}