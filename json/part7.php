<?php
//cookies set/cookie login
if($_SERVER['REQUEST_METHOD'=="POST"]){
    
    $PlainText=file_get_contents("php://input");
    $PlainArray=json_decode($PlainText,true);
    $username=$PlainArray['username'];
    setcookie("username",$username);
    
    echo"Cookie-Success";
    
}
//code updatE WITH LOGOUT READ