<?php
//constructor for inheritance

class Father{

    public function __construct(){

       echo"Hi Father";
     } 


}

class Son extends Father{
    public function __construct(){

        echo"Hi son";
      }
}
$objSon=new Son();