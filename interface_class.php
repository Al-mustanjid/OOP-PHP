<?php
/* Interface is alike abstract but interface cant have method with body like abstract also it cant inherit.
   #Methods of Interface class must **public
   #Interface class can extend by interface class
Thus, an interface is a collection of methods which will be implented by classes. 
Again, a class can implement multiple interfaces.

**Interface is used while two classes have slight relation
*/
//A man and vehicle both move but dont have same properties or things
interface Moveable{
    public function move();
}

interface testMove{
    public function testMove();
}
//When a class implements an interface, the class must implement all methods of interface
class Man implements Moveable{
    public function move(){
        echo "A man can move"."<br/>";
    }
}

class Vehicle implements Moveable{
    public function move(){
        echo "A vehicle can move"."<br/>";
    }
}
//multiple interfaces can implement by a class
class Cat implements Moveable, testMove{
    public function move(){
        echo "A cat can move"."<br/>";
    }
    public function testMove(){
        echo "A cat can move is being tested and proved!"."<br/>";
    }
}

$man= new Man();
$man->move();
$obj2 = new Vehicle();
$obj2->move();
$cat = new Cat();
$cat->move();
$cat->testMove();