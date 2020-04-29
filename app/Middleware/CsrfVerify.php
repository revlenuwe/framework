<?php


namespace App\Middleware;

use App\Exceptions\CsrfException;
use App\Security\Csrf;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class CsrfVerify implements MiddlewareInterface
{
    protected $requiredMethods = ['POST','PUT','PATCH','DELETE'];

    protected $except = [];
    protected $csrf;

    public function __construct(Csrf $csrf){
        $this->csrf = $csrf;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface{
        if($this->requiresCsrf($request)){
            if(!$this->csrf->tokenMatch($this->csrf->getTokenFromRequest($request))){
                throw new CsrfException;
            }
            return $handler->handle($request);
        }
        return $handler->handle($request);
    }

    protected function requiresCsrf(ServerRequestInterface $request){
        return in_array($request->getMethod(),$this->requiredMethods);
    }

    protected function isExcepted(ServerRequestInterface $request){
        return in_array($request->getUri()->getPath(),$this->except);
//        if($request->getUri()->getPath() != '/'){
//
//        }
    }

}