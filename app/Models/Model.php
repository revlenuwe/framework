<?php


namespace App\Models;


abstract class Model
{
    public function __get($name){
        if(property_exists($this,$name)){
            return $this->$name;
        }
    }

    public function __isset($name){
        if(property_exists($this,$name)){
            return true;
        }
        return false;
    }

    public function create($columns){
        $this->fill($columns);
    }

    public function update($columns){
        $this->fill($columns);
    }

    protected function fill(array $columns){
        foreach($columns as $column => $value){
            $this->$column = $value;
        }
    }
}