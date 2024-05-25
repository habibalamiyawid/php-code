<?php

//Json request->http_response_code
//  file_get_contents
//json transmission

if($_SERVER['REQUEST_METHOD'=="POST"]){
  $PlainText=file_get_contents("php://input");
  $plainArray=json_decode( $PlainText,true);
  $plainArray['num1'];
  $sum= $plainArray['num1']+ $plainArray['num2'];
  $sub= $plainArray['num1']- $plainArray['num2'];
  $mul= $plainArray['num1']* $plainArray['num2'];
  $div= $plainArray['num1']/ $plainArray['num2'];

  $result=["sum"=>$sum,"sub"=>$sub," mul"=> $mul,"div"=>$div];
   $JSON=json_encode($result);
   echo $JSON;
}
//this will not execute in server,post man will work