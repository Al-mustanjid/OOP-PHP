<?php
/* To access properties and methods of class, instantiate must be done.
    but there is no need of instantiation for static method and property.
    **To create static just put the word "static" before the method or property with Access modifier

    **To get access in class use (self::)
    **To get access out of class use (class name::)
    **Only static variables can access in static method
    **As without instantiation we get access thats why they also called class variable or method

    **This is also called scope resolution operator
*/
class Department{
    public static $name;
    public static $head;

    static function departmentHead($name, $head){
        //Access static properties
        self::$name = $name;
        self::$head = $head;

        echo self::$head." is the HEAD of the ".self::$name."<br/>";
    }
}

//Access out of the class 
Department::departmentHead("CSE","Kodu");
?>

<?php
class MyClass{
    public static $static_var;
    const last_name = "This is a constant";

    function printConstStatic($a){
        self::$static_var = $a;
        echo "Static Variable: ".self::$static_var."<br/>";
        echo "Constant Variable: ".self::last_name."<br/>";
    }
}

$classname = "MyClass"; //another way
$classname::printConstStatic("Scope Resolution");