<?
//properties value change using constructor
class car {
    public function __construct($newColor){

       $this->color=$newColor;

    } //constructor <-


    public $color="Red";
    public function drive(){
        echo "I'm Driving";
    }
    public function washing(){
        echo "I'm washing";
    }
}

$CarObj= new car("Green");
