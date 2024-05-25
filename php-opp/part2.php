<?php

//constructor
//1.he can take parameter.perametrinzed constructor
//2.he execute automatically
//3.Can't return anything
//4.Fast executed method
class car {
    public function __construct(){

         echo"auto light on";

    } //constructor <-


    public $color="Red";
    public function drive(){
        echo "I'm Driving";
    }
    public function washing(){
        echo "I'm washing";
    }
}

//object.u need to convert the class into object to use it
$carObj=new car(); //constructor er code choley ashbe, kisu alada call kora lagbe na







