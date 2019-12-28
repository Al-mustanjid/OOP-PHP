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
        echo $this->teacher_name." is a teacher of ".$dept->name." department"."<br/>";
    }
    //we can also do this work by this keywor "instanceof"
    //Actually it is used as condition checker
    function get_tecaher_2(DepartmentInfo $dept){
        if($dept instanceof DepartmentInfo)
        echo $this->teacher_name." is a teacher of ".$dept->name." department"."<br/>";
        else
        echo "It is not department object";
        }
}

$obj = new DepartmentInfo("1","CSE");
$obj1 = new DepartmentInfo("2","SE");
$obj2 = new Teacher("Kodu");
$obj2->get_tecaher($obj); //initializing department object
$obj2->get_tecaher_2($obj1);
?>