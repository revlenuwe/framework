<?php


namespace App\Middleware;


use App\Session\SessionStorage;
use App\Views\View;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ShareValidationErrors implements MiddlewareInterface
{

    protected $view;
    protected $session;

    public function __construct(View $view,SessionStorage $session){
        $this->view = $view;
        $this->session = $session;
    }


    public function process(ServerRequestInterface $request,RequestHandlerInterface $handler) : ResponseInterface
    {
        $this->view->share([
            'errors' => $this->session->get('errors'),
            'old_data' => $this->session->get('old'),
        ]);
        return $handler->handle($request);
    }

}