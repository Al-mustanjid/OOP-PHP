<?php
/*OOP is a programming style based on the concepts of class and object. It holds the data in form 
of fields which are aslo known as properties and procedures which are also known as method. */

 //class is a template or prototype in which the properties and methods of an object is defined
 class Post{
     //Adding properties
    var $a = 1; //before php 5 it is used by default and it is public
    public $title = 'Default Value';
    public $length=2;
     
     //adding methods : methods can be controlled by access modifier
    public function getTutorial(){
        echo "Title: ".$this->title."<br/>"; //notice: we can access the properties through this keyword
        echo "Length: ".$this->length."<br/>";
    }
 }

// object: an object is an instance of a class
// an object is a self stored elements which is made up of properties and methods as a single unit to make data usable
//An instance is an object that has been created from an existing class.
$post1 = new Post();
//$post1->title="1";
//$post1->length="2";
//accessing the member variables of Post class through an objecet
echo $post1->length; //notice: there will be no $ sign while accessing the member variable of class by obj
echo "<br/>";
$post1->title="Php Learning"; //accessed and changed
//accessing the methods
$post1->getTutorial();
?>