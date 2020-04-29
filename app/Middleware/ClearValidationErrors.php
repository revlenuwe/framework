<?php


namespace App\Middleware;


use App\Session\SessionStorage;
use App\Views\View;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ClearValidationErrors implements MiddlewareInterface
{

    protected $session;

    public function __construct(SessionStorage $session){
        $this->session = $session;
    }


    public function process(ServerRequestInterface $request,RequestHandlerInterface $handler) : ResponseInterface
    {
        $response = $handler->handle($request);

        $this->session->remove('errors','old_data');
        return $response;
    }

}