<?php
namespace App\Http\Controllers;

class WaterController implements ElementInterface {

    public function chracteristics(){
        return "ok";
    }

    public function describe(ElementInterface $ElementInterface){
            echo get_class($ElementInterface);
    }
    public function call(){
        $data = new WaterController;
    return $this->describe();  
    }
    // $data = new WaterController;
    // describe($ElementInterface);  
}
