<?php

class Person{
    function __construct(private $name,private $age)
    {
        
    }// no need to declare like we used to do before, can do this in 1 line
    function introduction(){
        echo "My name is {$this->name} and I am {$this->age} years old.";

    }
}
$person = new Person("lamiya",23);
$person->introduction();
// this whole situation is called property promotion