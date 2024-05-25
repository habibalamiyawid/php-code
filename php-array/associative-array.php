<?php

//key:value pair

$person=[
    'FirstName'=>"Habiba",
    'LastName'=>"Rashid",
    'age'=>23
];
// echo $person['FirstName'];
//print_r($person)
//foreach loop to access the array
foreach($person as $key=>$value){
    echo "$key<br/>"; //if u want to see only key
    echo" $key:$value  <br/>";

}
?>