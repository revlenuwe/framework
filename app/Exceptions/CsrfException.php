<?php


namespace App\Exceptions;


use Exception;

class CsrfException extends Exception
{
    protected $request;
    protected $errors;
}