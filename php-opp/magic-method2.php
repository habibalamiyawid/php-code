<?php
//object to string
class Person{
    private $name;
    private $age;

    function __construct($name,$age)
    {
        $this->name =$name;
        $this->age =$age;
    }
    function __toString(){
        return "Name : {$this->name}, Age: {$this->age}";
    }
    function introduction(){
        echo "My name is {$this->name} and I am {$this->age} years old.";
       //for converting into json 
       //return json_encode($this); //it will work for only public property
       //for private property pass it with array
       // return json_encode(["name"=>$this->name],"age"=>$this->age]);
    
    
    
    }
    // function __get($key){
    //    return $this->$key ;
    // }
    // function __set($key,$value){
    //     if($key=="name"||$key=="age"){
    //         $this->$key =$value;
    //         return;
    //     }
    //     throw new Exception("Invalid");
    // }
}
$p1 = new Person("lami",24);
echo $p1;
// $p1->age=26;
// $p1->introduction();