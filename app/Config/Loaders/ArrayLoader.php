<?php


namespace App\Config\Loaders;


use Exception;

class ArrayLoader implements Loader
{
    protected $files;

    public function __construct(array $files){
        $this->files = $files;
    }


    public function parse(){
        $parsed = [];

        foreach ($this->files as $namespace => $file){
            try {
                $parsed[$namespace] = require $file;
            }catch (Exception $e){
                //nothing
            }
        }

        return $parsed;
    }
}