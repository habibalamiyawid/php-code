<?php
//final Keyword no relation will be existed with child
//100% break then put final class 
//restriction-use final before that
class Father{

    public function murgi(){

        for($i=0;$i<=100;$i++){
         echo"$i<br/>";
         
          }
    }
   final public function jomi(){

        for($i=0;$i<=100;$i++){
         echo"$i<br/>";
         
          }
    } // then child will not get only this function
    public function pool(){

        for($i=0;$i<=100;$i++){
         echo"$i<br/>";
         
          }
    }

}

class Son extends Father{

    public function murgi(){

        for($i=0;$i<=100;$i++){
         echo"$i<br/>";
         
          }
    }
//    final public function jomi(){

//         for($i=0;$i<=100;$i++){
//          echo"$i<br/>";
         
//           }
//     } // then child will not get only this function
    public function pool(){

        for($i=0;$i<=100;$i++){
         echo"$i<br/>";
         
          }
    }
}