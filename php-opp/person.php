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
    function setName($name){
        $this->name =$name;
    }
    function setAge($age){
        $this->age = $age;
    }
    //if you don't put setter method it will be read only mode
    function introduction(){
        echo "My name is {$this->name} and I am {$this->age} years old.";

    }
}
$person = new Person();
$person->setName("Lamiya");
$person->setAge(22);
$person->introduction();
