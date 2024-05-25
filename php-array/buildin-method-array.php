<?php
//array_values functions
// $person=[
//     'FirstName'=>"Habiba",
//     'LastName'=>"Rashid",
//     'age'=>23
// ];
// $value=array_values($person);
// print_r($value);

//array_keys
// $person=[
//     'FirstName'=>"Habiba",
//     'LastName'=>"Rashid",
//     'age'=>23
// ];

// $key=array_keys($person);
// print_r($key);

//array_combine()

// $keys=["a","b","c"];
// $values=["apple","ball","cat"];

// $combine=array_combine($keys,$values);

// print_r($combine);

//array_fill()

// $filled= array_fill(0,3,"Lamiya");

// print_r($filled);

//array_push()

// $country=['Bangladesh','India'];
// array_push($country,"Canada","Thailand");
// print_r($country);

//array_pop()

$fruits=array('apple','orange','lichi','mango','banana');
// array_pop($fruits);
// print_r($fruits);
$fruits[] = 'orange';
print_r($fruits);
?>