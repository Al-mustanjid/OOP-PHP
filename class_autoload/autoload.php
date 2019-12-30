<?php
/* Suppose we require classes in another file, so require is the way.
    But when it is about large collection! there is __autoload() function
    #there is a naming convention must be follwed
    **The name of class and the name of file must same
    file name: class.MyClass.php
    class name: MyClass
    when we create object of that class the functon automatically loads the class
*/

function __autoload($class_name){ //here while we call the class it auto loads
    //as it is in another folder thats way the directory has setted
    require_once "loaded-class/class.".$class_name.".php";
}

//calling class.MyClass.php
$obj = new MyClass("1","My Class 1");
//calling class.MyClass2.php
$obj2 = new MyClass2("2", "My Class 2");