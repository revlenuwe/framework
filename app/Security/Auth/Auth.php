<?php


namespace App\Security\Auth;


use Exception;
use App\Requests\ValidateRequest;
use App\Security\Auth\Providers\UserProvider;
use App\Session\SessionStorage;
use Laminas\Crypt\Password\Bcrypt;

class Auth
{
    use ValidateRequest;

    protected $user;
    protected $hash;
    protected $session;

    public function __construct(UserProvider $user,Bcrypt $hash,SessionStorage $session){
        $this->user = $user;
        $this->hash = $hash;
        $this->session = $session;
    }

    public function username(){
        return 'login';
    }

    public function authenticateKey(){
        return 'id';
    }

    public function attempt($request){
        $credentials = $this->validateRequest($request);
        $user = $this->getUser($credentials[$this->username()]);

        if(!$user || !$this->validateCredentials($user,$credentials['password'])){
            return false;
        }
        $this->setToSession($user);

        return true;
    }

    public function validateRequest($request){
        return $this->validate($request,[
            $this->username() => 'required',
            'password' => 'required',
        ]);
    }

    public function validateCredentials($user,$password){
        return $this->hash->verify($password,$user->password);
    }

    public function getUser($username){
        return $this->user->retrieveByUsername($this->username(),$username);
    }

    public function isInSession(){
        return $this->session->exists($this->authenticateKey());
    }

    public function setFromSession(){
        $user = $this->user->retrieveById(
            $this->session->get($this->authenticateKey())
        );

        if(!$user){
            throw new Exception;
        }
        $this->user = $user;
    }

    protected function setToSession($user){
        $this->session->set($this->authenticateKey(),$user->id);
    }

    public function user(){
        return $this->user;
    }

    public function check(){
        return $this->isInSession();
    }


}