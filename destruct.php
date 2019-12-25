<?php
/* Destructor: Destructor is the reverse of constructor. 
Destructor is called while the object needs to be removed while the script is stopped or executed
**notes: if both child and parent class have destructors then first destructr function works from the derived class then the parent

__destruct()
*/

class Myclass{
    private $name;

    //constructor
    function __construct($name){
        echo "In Constructor ";
        $this->name = $name;
    }

    //destruct
    function __destruct(){
        echo "destroying ".$this->name; //this will print as script is closed with the elements of construct
    }
}
$obj = new Myclass("Class Object");