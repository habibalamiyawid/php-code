<?php

$arr=[
    ['FirstName'=>"Habiba",
    'LastName'=>"Rashid",
    'age'=>23],
    ['FirstName'=>"Humaira",
    'LastName'=>"Rashid",
    'age'=>23],
    ['FirstName'=>"Harun-or-",
    'LastName'=>"Rashid",
    'age'=>23]


];
//accessing the value
// echo $arr[2]['FirstName'];
// echo $arr[2]['LastName'];

foreach($arr as $child){
    foreach($child as $key=>$value){
     
        echo "$value<br/>";
        echo "$key:$value<br/>";
    }
 
}
?>