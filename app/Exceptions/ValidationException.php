<?php


namespace App\Exceptions;

use Exception;
use Psr\Http\Message\RequestInterface;

class ValidationException extends Exception
{

    protected $request;
    protected $errors;

    public function __construct(RequestInterface $request,array $errors){
        parent::__construct();
        $this->request = $request;
        $this->errors = $errors;
    }

    public function getPath(){
        return $this->request->getUri()->getPath();
    }

    public function getPreviousUrl(){
        return $this->request->getHeader('referer')[0];
    }

    public function getOldData(){
        return $this->request->getParsedBody();
    }

    public function getErrors(){
        return $this->errors;
    }
}