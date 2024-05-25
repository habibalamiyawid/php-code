<?php

//static propeties and method

class MyGadgets{

public static $myDslrName ="lamiya";
public $mobileName ="laya";

public static function Chata(){
    echo"chata";
}
public function Watch(){
    echo"Watch";
}
public static function Dslr(){
    echo self::$myDslrName; //to access static
}
public function Mobile(){
    echo $this->$mobileName ;
}
}
