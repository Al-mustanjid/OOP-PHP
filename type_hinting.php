<?php
/* To use object as a parameter in a function we can use type hinting
Just declare the class name brfore the object
--------------------------------
function(Classname $ojectname)
--------------------------------
**while we use type hinting as a parameter then we can't normally pass any other variable or something
we must provide the object of the defined class otherwise it will commit an error.
*/
class DepartmentInfo{
    private $id;
    protected $name;

    function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }
}
class Teacher extends DepartmentInfo{
    protected $teacher_name;
    function __construct($tName){
        $this->teacher_name = $tName;
    }

    //Adding an object as parameter in function
    function get_tecaher(DepartmentInfo $dept){
        echo $this->teacher_name." is a teacher of ".$dept->name." department";
    }
}

$obj = new DepartmentInfo("1","CSE");
$obj2 = new Teacher("Kodu");
$obj2->get_tecaher($obj); //initializing department object