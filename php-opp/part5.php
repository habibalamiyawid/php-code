<?php
//inheritance
class Father{
  public function print100(){

   for($i=0;$i<=100;$i++){
    echo"$i<br/>";
    
     }
   }
 }


class Son extends Father{

    public function print100(){

        for($i=0;$i<=100;$i+10){
         echo"$i<br/>";
         
          }
        }

}

$SonObj=new Son();
$SonObj->print100();
//if we change for child that is overiding