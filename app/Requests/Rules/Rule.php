<?php


namespace App\Requests\Rules;


interface Rule
{
    public function validate($field, $value, $params, $fields);
}