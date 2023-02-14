<?php
namespace cal\Sumfunction;
class sumfun{

    private $number1 = null;
    private $number2 = null;
    public function __construct($number1, $number2){
        $this -> number1 = $number1;
        $this -> number2 = $number2;
    }

    function get_sum(){
       return $this ->number1 + $this-> number2;
    }
}


?>