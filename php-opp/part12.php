<?php

/*Access Modifier
public

private

protected
*/

class MyHouse{
    //my husband
    private $jamai="Angel Omuk"; //not allowed in other place
    public $kajerchele="Akash";//allowed in all class
    protected $nijerchele="batash";//
    function demo(){
      
    }
}
class MyInLawsHouse extends MyHouse{
    //my husband can't be here not even i have relation
    //protected can be here too
    function demo(){
           echo $this->nijerchele;
    }
}
class MyFriendsHouse{
    //my husband not allowed
        //protected cant be here
    function demo(){
        // echo $this->jamai;
    }
}