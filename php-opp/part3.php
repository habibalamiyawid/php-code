<?php

 class car {
    public function __construct($n1,$n2,$n3){

       echo $n1+$n2+$n3;

    } 


    public $color="Red";
    public function drive(){
        echo "I'm Driving";
    }
    public function washing(){
        echo "I'm washing";
    }
}

//object.u need to convert the class into object to use it
$carObj=new car(1,2,3); //constructor er code choley ashbe, kisu alada call kora lagbe na

?>





