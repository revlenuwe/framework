<?php


namespace App\Controllers;


use App\Security\Auth\Auth;
use App\Views\View;
use Doctrine\ORM\EntityManager;
use Laminas\Diactoros\Response;

class AppController extends Controller
{

    protected $response;
    protected $view;
    protected $db;
    protected $auth;

    public function __construct(View $view,EntityManager $db,Auth $auth){
        $this->view = $view;
        $this->db = $db;
        $this->auth = $auth;
        $this->response = new Response();
    }


    public function index($request){
        dump($this->route);
        return $this->view->render($this->response,'index.twig',[
            'user' => $this->auth->user()
        ]);
    }

    public function home() {
        $this->response->getBody()->write('home');
        return $this->response;
    }
}