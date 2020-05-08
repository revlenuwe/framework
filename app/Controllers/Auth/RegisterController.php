<?php


namespace App\Controllers\Auth;


use App\Controllers\Controller;
use App\Models\User;
use App\Security\Auth\Auth;
use App\Views\View;
use Doctrine\ORM\EntityManager;
use Laminas\Crypt\Password\Bcrypt;
use Laminas\Diactoros\Response;
use League\Route\Router;

class RegisterController extends Controller
{
    protected $auth;
    protected $db;
    protected $view;
    protected $response;
    protected $hasher;
    protected $route;

    public function __construct(Auth $auth,EntityManager $db,View $view,Response $response,Bcrypt $hasher,Router $route){
        $this->auth = $auth;
        $this->db = $db;
        $this->view = $view;
        $this->response = $response;
        $this->hasher = $hasher;
        $this->route = $route;
    }

    public function index(){
        return $this->view->render($this->response,'auth/register.twig');
    }

    public function register($request){
        $data = $this->validateRequest($request);
        $this->createUser($data);

        if(!$this->auth->attempt($request)){
            return redirect($this->route->getNamedRoute('register-index'));
        }

        return redirect($this->route->getNamedRoute('index')->getPath());
    }

    public function createUser($data){
        $user = new User();

        $user->create([
            $this->auth->username() => $data[$this->auth->username()],
            'email' => $data['email'],
            'password' => $this->hasher->create($data['password'])
        ]);

        $this->db->persist($user);
        $this->db->flush();

        return $user;
    }

    protected function validateRequest($request){
        return $this->validate($request,[
            $this->auth->username() => ['required',['exists',User::class]],
            'email' => ['required','email'],
            'password' => [
                ['equals','password_confirmation']
            ]
        ]);
    }
}