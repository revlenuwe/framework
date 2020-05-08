<?php


namespace App\Controllers\Auth;


use App\Controllers\Controller;
use App\Security\Auth\Auth;
use App\Session\Flash;
use App\Views\View;
use Laminas\Diactoros\Response;
use Laminas\Diactoros\ServerRequest;
use League\Route\Router;

class LoginController extends Controller
{
    protected $response;
    protected $view;
    protected $auth;
    protected $route;
    protected $flash;

    public function __construct(Response $response,View $view,Router $route,Auth $auth,Flash $flash){//extend to other wrapper for route
        $this->view = $view;
        $this->response = $response;
        $this->auth = $auth;
        $this->route = $route;
        $this->flash = $flash;
    }

    public function index($request){
        return $this->view->render($this->response,'auth/login.twig');
    }

    public function authenticate(ServerRequest $request){
        $attempt = $this->auth->attempt($request);
        if(!$attempt){
            $this->flash->add('error','Login error');
            return redirect($request->getUri()->getPath());
        }
        return redirect($this->route->getNamedRoute('index')->getPath());
    }

    protected function username(){
        return 'login';
    }
}