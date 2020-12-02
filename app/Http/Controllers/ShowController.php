<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends CarController
{
    public function setParameter($name){
        $this->getName($name);
    }

    public function getName($carName){
        $obj = new ShowController;
         echo $obj->brandName($carName);
    }

    ///// Coupling
    public function showService($x,$y){
        $Client = new ClientController(new ServiceController());
        $Client->doSomething($x,$y);
    }
}
