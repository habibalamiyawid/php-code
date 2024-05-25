<?php

//static propeties and method

class MyGadgets{
   
public static function Chata(){
    echo"chata";
}
public function Watch(){
    echo"Watch";
}
public static function Dslr(){
    echo"Dslr";
}
public function Mobile(){
    echo"Mobile";
}
}
$obj=new MyGadgets();
//without creating any obj i can access
MyGadgets::Chata(); //this is howu can do this