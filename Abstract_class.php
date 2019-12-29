<?php
/* Abstract - normally think it is the short description of overall works or procedures.
   #Abstract class cant be instantiated
   #The class inherits abstract class that can instantiate
   #If there is any abstract method in abstract class the methods 
        and properties must include in child class otherwise it commits error
   #The abstract method has no body; the body declared in child class
   #Normal methods can also be kept in abstract class
*/
abstract class DepartmentInfo{
    protected $id, $name;
    function __construct($id,$name){
        $this->id = $id;
        $this->name = $name;
    }

    //Abstract method
    abstract function departmentActivity();
    abstract function printInfo();
}
class CSE extends DepartmentInfo{
    protected $lab;
    function __construct($id, $name, $lab){
        parent::__construct($id, $name);
        $this->lab = $lab;
        $this->printInfo();
        $this->departmentActivity();
    }

    //Abstract method body implementation
    function departmentActivity(){
        echo 'Cse dept arranges programming contest every year';
    }
    public function printInfo()
    {
       echo $this->id."<br/>";
       echo $this->name."<br/>";
       echo $this->lab."<br/>";
    }
}

$obj = new CSE("12","CSE",5);