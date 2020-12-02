<?php
///////////////////////abstract class\\\\\\\\\\\\\\\\\\\\\\\\
namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class CarController
{
    public function brandName($name){
        return $name;
    }

    abstract function setParameter($name);
}
