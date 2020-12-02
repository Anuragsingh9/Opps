<?php 

interface Elements{
    public function characteristics();
}

class Water implements Elements {
    public function characteristics(){
            return "This is Water";
    }
}

class Fire implements Elements {
    public function characteristics(){
        return "This is Fire";
    }
}

class Earth implements Elements {
    public function characteristics(){
        return "This is Earth";
    }
}

 function describe(Elements $elements){
    echo '<strong>'.get_class($elements).'</strong>'.'<br>'.$elements->characteristics().'<br>';
    // echo $elements->characteristics();

}
$elements = new Water;
describe($elements);

$elements = new Fire;
describe($elements);

$elements = new Earth;
describe($elements);

