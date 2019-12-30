<?php
//namespace must define at the begining of the class
namespace BasicTutorial;
class Tutorial{
    public $title = "Default";
    public function printInfo(){
        echo "This is in Basic Tutorial Namespace"."<br/>";
    }
}