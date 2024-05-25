<?php
//class is a blueprint
class car {
    public $color="Red";
    public function drive(){
        echo "I'm Driving";
    }
    public function washing(){
        echo "I'm washing";
    }
}

//object.u need to convert the class into object to use it
$carObj=new car(); //this is a object now.u can create it n times

echo $carObj->color; //to access anything from class
echo $carObj->drive();
echo $carObj->washing();





