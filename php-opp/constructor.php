<?php
class Person{
    private $name;
    private $age;
    //insert getters setters
    function getName(){
        return $this->name;
    }
    function getAge(){
        return $this->age;
    }
    function __construct($name,$age)
    {
        $this->name =$name;
        $this->age =$age;
    }
    //if you don't put setter method it will be read only mode
    function introduction(){
        echo "My name is {$this->name} and I am {$this->age} years old.";

    }
}
$person = new Person("lamiya",24);

$person->introduction();
///this ready only type, cant change the value even if i want