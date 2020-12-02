<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $service;

    // Non coupled code.
    // public function __construct() {
    //     $this->service = new Service();
    // }
    public function __construct(ServiceController $service) {
        $this->service = $service;
    }
    public function doSomething($c,$d) {
        $this->service->add($c,$d);
    }

}

