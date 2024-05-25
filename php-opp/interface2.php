<?php

interface Vehicle{
    //public $mileage; property cant be in the interface,only function
    function start();
    function stop();
    function getMileage($distance,$fuel);

}
abstract class VehicleX implements Vehicle{
    public function getMileage($distance, $fuel)
    {   
          $vehicle =get_class($this);
         // echo"Vehicle Name is".get_class($this)."\n";
         echo"{$vehicle} Mileage is".($distance/$fuel)."kmpl\n";
    }
}
class Car extends VehicleX{

    public function start()
    {
        echo"Car is Started";
    }
    public function stop(){
        echo"Car is stopped";
    }
    // public function getMileage($distance, $fuel)
    // {
    //     echo"Car Mileage is".($distance/$fuel);
    // }
}
class MotorCycle extends VehicleX{

    public function start()
    {
        echo"MotorCycle is Started";
    }
    public function stop(){
        echo"MotorCycle is stopped";
    }
}
class Truck extends VehicleX{

    public function start()
    {
        echo"Truck  is Started";
    }
    public function stop(){
        echo"Truck  is stopped";
    }
    //if i want to change anything in that function i can do that in this way>
    //this call method overriding
    public function getMileage($distance, $fuel)
    {
        echo"Vehicle's Mileage is".($distance/$fuel)."mpl\n";
    } 
}
$m= new MotorCycle();
$c= new Car();
$t= new Truck();
$m->getMileage(100,10);
$c->getMileage(100,5);
$t->getMileage(100,10);

// shob object er modddhe common part ta diye akta abstract class