<?php
//associative array to object encode
$person=["name"=>"OSTAD","age"=>13];

$JSON=json_encode($person); //now its json object

echo $JSON;