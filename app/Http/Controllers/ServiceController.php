<?php
///////////////////////Coupling\\\\\\\\\\\\\\\\\\\\\\
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function doTask() {
        echo 'Performed by Service';
    }

    public function add($a,$b){
        echo "Value of a = $a"."<br>".
        "Value of b = $b"."<br>";
        

        $c = $a + $b; 
        echo "<strong>"."There sum is ".$c."</strong>";
    }
}
