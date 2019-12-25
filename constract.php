<?php
/*onstructor: constructor is a codeblock which executes automatically during object creation
it is written by double underscore __ before constructor name
it provides code reusability
*/

class MyClass{
    private $name;
    private $age;
    private $section;

    public function __construct($name, $age, $section){
        $this->name = $name;
        $this->age = $age;
        $this->section = $section;
    }

    public function infoPrint(){
        echo $this->name.'<br/>';
        echo $this->age.'<br/>';
        echo $this->section.'<br/>';
    }
}

$object1 = new MyClass("Arif","24","H");
$object1->infoPrint();