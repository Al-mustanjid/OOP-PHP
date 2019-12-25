<?php
/* Inheritence: The way of reusing code such like childs get their parents properties and others
but it is also true child has also his own things.

In OOP, it is the major feature. It is like family tree. 
**Parent class also called superclass
**Child class is the inherited class which inherits parent class
*/

//Parent Class
class MyClass{
    protected $fonts_size;
    protected $string_value;
    protected $color;

    function __construct($fonts_size, $string_value, $color){
        $this->fonts_size = $fonts_size;
        $this->string_value = $string_value;
        $this->color = $color;
        $this->printInfo();
    }

    public function printInfo(){
        echo "<p style=font-size:".$this->fonts_size.";color:".$this->color.";>".$this->string_value."</p>";
       
}
}

//child class
class MySubclass extends MyClass{
    //function overriding
    public function printInfo(){
        echo "<p style=font-size:".$this->fonts_size.";color:".$this->color.";text-decoration:underline;>".$this->string_value."</p>";
    } 
}

$parentClass = new MyClass(20,"OOP Inheritence","red");
$childClass = new MySubclass(30,"OOP Inheritence","green");
?>

<?php
//Another example of inheritence
class Department{
    protected $departmentName;
    private $chairmen;
    private $classroom;
    private $numberOfStudents;
    function __construct($departmentName, $chairmen, $classroom, $numberOfStudents){
        $this->departmentName = $departmentName;
        $this->chairmen = $chairmen;
        $this->classroom = $classroom;
        $this->numberOfStudents = $numberOfStudents;
        $this->showDepartmentInfo();
    }

    //Adding method
    public function showDepartmentInfo(){
        echo "Department Name: ".$this->departmentName."<br/>";
        echo "Chairmen: ".$this->chairmen."<br/>";
        echo "classroom: ".$this->classroom."<br/>";
        echo " Number Of Students: ".$this->numberOfStudents."<br/>";
    }
    public function departmentActivity(){
        echo $this->departmentName." dept. arranges a tour every year."."<br/>";
    }
}

/*issues:
1. If child class does not have own constructor it calls the constructor of parent class while it is instantiated
2. If child class has own constructor method then it does not execute the constructor of parent class 
    while it is instantiated, ultimately it executes its own constructor.
3. Ultimate PHP first search the methods and properties of child class, if found it executes first. If not then
    executes methods and properties of parent class.
**But we can use while we need using keyword (parent::)
*/

//child class
class SWE extends Department{
//Adding properties of SWE class
    private $labsNumber;
    function __construct($departmentName, $chairmen, $classroom, $numberOfStudents, $labsNumber){
        //using parent class constructor
        parent::__construct($departmentName, $chairmen, $classroom, $numberOfStudents);
        $this->labsNumber = $labsNumber;
        $this->showLabInfo();
        $this->programmingContestActivity();
    }

    //Adding child class own function
    public function showLabInfo(){
        echo "labs Number: ".$this->labsNumber."<br/>";
    }
    public function programmingContestActivity(){
        echo $this->departmentName." arranges 3 programming contests each year"."<br/>";
    }
}

//Another child class
class English extends Department{
    private $languageCourse;
    function __construct($departmentName, $chairmen, $classroom, $numberOfStudents, $languageCourse){
        //Adding parent class construct
        parent::__construct($departmentName, $chairmen, $classroom, $numberOfStudents);
        $this->languageCourse = $languageCourse;
        $this->showCourseInfo();
    }
    public function showCourseInfo(){
        echo "Language Courses: ".$this->languageCourse."<br/>";
    }
}

//creating objects
$SWE = new SWE("SWE","Mr Jodu",25,300,5);
$SWE->departmentActivity();
echo "<hr/>";
$Eng = new English("English","Mr Kodu",7,100,3);
$Eng->departmentActivity();

?>