<?php


namespace App\Requests;


use App\Exceptions\ValidationException;
use Laminas\Diactoros\ServerRequest;
use Valitron\Validator;

trait ValidateRequest
{
    public function validate(ServerRequest $request,array $rules){
        $validator = new Validator($request->getParsedBody());
        //Добавить обертку для сообщений
        $validator->mapFieldsRules($rules);

        if(!$validator->validate()){
            throw new ValidationException($request,$validator->errors());
        }
        return $request->getParsedBody();
    }
}