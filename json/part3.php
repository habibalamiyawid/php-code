<?php

//server REQUEST_METHOD WEB REQUEST RESPONSE

if($_SERVER['REQUEST_METHOD'=="POST"]){
    
    echo"This is Post ";
}
if($_SERVER['REQUEST_METHOD'=="GET"]){

    echo"This is GET";

}
if($_SERVER['REQUEST_METHOD'=="PUT"]){
    
    echo"This is PUT ";

}
if($_SERVER['REQUEST_METHOD'=="DELETE"]){
    
    echo"This is DELETE ";

}
if($_SERVER['REQUEST_METHOD'=="PATCH"]){
    
    echo"This is PATCH ";

}