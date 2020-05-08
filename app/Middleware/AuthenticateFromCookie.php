<?php


namespace App\Middleware;

use App\Security\Auth\Auth;
use Exception;
use \Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class AuthenticateFromCookie implements MiddlewareInterface
{

    protected $auth;

    public function __construct(Auth $auth){
        $this->auth = $auth;
    }

    public function process(ServerRequestInterface $request,RequestHandlerInterface $handler) : ResponseInterface
    {
        if($this->auth->check()){
            return $handler->handle($request);
        }

        if($this->auth->hasRecaller()){
            try {
                $this->auth->setFromCookie();
            } catch (Exception $e){
                //out
            }
        }
        return $handler->handle($request);
    }
}