<?php
//abstract
//father is dead
//only child can use parents property, parent
abstract class Father{
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

$SonObj=new Father();
$SonObj-> print100();
//if we change for child that is overiding