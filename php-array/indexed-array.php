<?php
$a1=array('Lamiya','Himu','Jaria','Jarif','Jabir');
$a2=['Dhaka','Delhi','Katmundu','Rajshahi'];

// echo $a1[0];

//for loop through an indexed Array

for($i=0;$i<=count($a1);$i++){
  echo"$a1[$i]<br/>";
}

//for each loop
foreach($a2 as $item)
{
   echo"$item<br/>";
}