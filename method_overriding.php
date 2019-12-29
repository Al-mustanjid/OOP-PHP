<?php
/* when a simmilar method of parent class is also declared in child class 
then php executes the method of child class not parent class
This is also called ploymorphism. The way to use same method for diffrenet purposes in different classes.
**but we can call it by scope with parent keyword
*/

//Lets see how child class execute same method in its own class but not in parent class 
//parent class
class Myclass{
    //parent class method
    function parent_class_method(){
        echo "This is from parent class \n"."<br/>";
    }
}

class MySubclass extends Myclass{
    function parent_class_method(){
        echo "This method calls by child class. Its method overriding."."<br/>";
    }
}

$obj = new MySubclass();
$obj->parent_class_method(); //this executes only the method of the child class

?>

<?php
class Myclass2{
    //parent class method
    function parent_class_method(){
        echo "This is from parent class (Myclass2)"."<br/>";
    }
}

class MySubclass2 extends Myclass2{
    function parent_class_method(){
        parent::parent_class_method(); //calling the parent class method 
        echo "This method calls by child class (Mysubclass2). Its method overriding.\n"."<br/>";
    }
}

$obj = new MySubclass2();
$obj->parent_class_method(); //executes methods of both class
?>