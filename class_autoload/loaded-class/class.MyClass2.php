<?php
class MyClass2{
    protected $id;
    protected $name;
    function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
        $this->printInfo();
    }

    public function printInfo(){
        echo "Id: ".$this->id."<br/>";
        echo "Name: ".$this->name."<br/>";
    }
}