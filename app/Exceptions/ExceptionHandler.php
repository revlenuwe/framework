<?php


namespace App\Exceptions;

use App\Session\SessionStorage;
use App\Views\View;
use Exception;
use Laminas\Diactoros\Response;
use ReflectionClass;

class ExceptionHandler
{
    protected $exception;
    protected $session;
    protected $view;
    protected $response;

    public function __construct(Exception $exception,SessionStorage $session,View $view,Response $response){
        $this->exception = $exception;
        $this->session = $session;
        $this->view = $view;
        $this->response = $response;
    }

    public function handle(){

        $class = (new ReflectionClass($this->exception))->getShortName();

        if(method_exists($this,$method = "handle".$class)){
            return $this->$method($this->exception);
        }

        return $this->unhandleException($this->exception);
    }

    public function handleValidationException(Exception $exception){
        $this->session->set([
            'errors' => $exception->getErrors(),
            'old_data' => $exception->getOldData()
        ]);
        return redirect($exception->getPreviousUrl());
    }

    public function handleCsrfException(Exception $exception){
        return $this->view->render($this->response,'errors/csrf.twig');
//        $this->session->set([
//            'errors' => $exception->getErrors(),
//            'old_data' => $exception->getOldData()
//        ]);
//        return redirect($exception->getPreviousUrl());
    }

    protected function unhandleException(Exception $exception){
        throw $exception;
    }
}