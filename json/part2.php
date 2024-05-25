<?php
//to json array
$person=[
    ["name"=>"OSTAD","age"=>13],
    ["name"=>"OSTAD","age"=>13],
    ["name"=>"OSTAD","age"=>13],
    ["name"=>"OSTAD","age"=>13]
];
$JSON=json_encode($person); //now its json array
echo $JSON;