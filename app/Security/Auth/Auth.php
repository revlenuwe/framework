<?php


namespace App\Security\Auth;


use App\Cookie\Cookie;
use App\Models\User;
use Doctrine\ORM\EntityManager;
use Exception;
use App\Requests\ValidateRequest;
use App\Security\Auth\Providers\UserProvider;
use App\Session\SessionStorage;
use Laminas\Crypt\Password\Bcrypt;

class Auth
{
    use ValidateRequest;

    protected $provider;
    protected $user;
    protected $db;
    protected $hash;
    protected $session;
    protected $recaller;
    protected $cookie;

    public function __construct(UserProvider $provider,EntityManager $db,Bcrypt $hash,SessionStorage $session,Recaller $recaller,Cookie $cookie){
        $this->provider = $provider;
        $this->db = $db;
        $this->hash = $hash;
        $this->session = $session;
        $this->recaller = $recaller;
        $this->cookie = $cookie;
    }

    public function username(){
        return 'login';
    }

    public function authenticateKey(){
        return 'id';
    }

    public function rememberKey(){
        return 'remember_token';
    }

    public function attempt($request){
        $credentials = $this->validateRequest($request);
        $user = $this->getUser($credentials[$this->username()]);

        if(!$user || !$this->validateCredentials($user,$credentials['password'])){
            return false;
        }

        if(isset($request->getParsedBody()[$this->rememberKey()])){
            $this->setRememberToken($user);
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

    public function hasRecaller(){
        return $this->cookie->exists($this->rememberKey());
    }

    protected function setRememberToken($user){
        list($identifier,$token) = $this->recaller->generate();

        $this->cookie->forever(
            'remember_token',
            $this->recaller->generateValue($identifier,$token)
        );

        $this->updateRememberValues($user,$identifier,$token);
    }

    public function validateCredentials($user,$password){
        return $this->hash->verify($password,$user->password);
    }

    public function getUser($username){
        return $this->provider->retrieveByUsername($this->username(),$username);
    }

    protected function updateRememberValues($user,$identifier,$token){
        $this->provider->retrieveById($user->id)->update([
            'remember_identifier' => $identifier,
            'remember_token' => $this->recaller->generateRememberTokenHash($token)
        ]);
        $this->db->flush();
    }

    public function isInSession(){
        return $this->session->exists($this->authenticateKey());
    }

    public function setFromSession(){
        $user = $this->provider->retrieveById(
            $this->session->get($this->authenticateKey())
        );

        if(!$user){
            throw new Exception;
        }
        $this->provider = $user;
    }

    public function setFromCookie(){
        $hash = $this->cookie->get($this->rememberKey());

        $user = $this->provider->retrieveByIdentifier(
            $this->recaller->identifier($hash)
        );

        if(!$user){
            $this->cookie->remove($this->rememberKey());
            return;
        }

        if(!$this->recaller->validateToken($this->recaller->token($hash),$user->remember_token)){
            $this->provider->clearUserRememberData($user);

            $this->cookie->remove($this->rememberKey());
            throw new Exception();
        }

        $this->setToSession($user);
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

    public function logout(){

    }


}