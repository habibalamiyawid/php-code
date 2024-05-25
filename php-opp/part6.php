<?php
//parent keyword can use it without creating any object we can access any property


class Father{
  public function print100(){

   for($i=0;$i<=100;$i++){
    echo"$i<br/>";
    
     }
   }
 }


class Son extends Father{

    public function demo(){

      parent::print100(); //can access any property from parent
    }

}

$SonObj=new Son();
$SonObj->demo();
//if we change for child that is overiding