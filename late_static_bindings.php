<?php
/* We access static properties and methods through self:: and classname::
 but when a child class inherits a parent class with static method and properties
 it does not get the properties and methods as normally in terms of inheritence

 **Normally self does not issue the access and method overriding
 **To solve the issues PHP 5.3 brought late static binding way
 ** To get acees just replace the word self with static
 */

 class Cat{
     public static function run(){
         echo "Cat runs"."<br/>";
     }

     public static function tester(){
         self::run();
     }

     //another method to metod overriding while inherited by child class
     public static function tester2(){
        static::run(); //replace the word self to static
    }
 }
 class Leopard extends Cat{
    public static function run()
     {
         echo "Leopard runs faster than Cat"."<br/>";
     }
 }
 Leopard::tester(); //Output: Cat runs
                    //As discussed before it does not get parent class static properties and methods normally
                    //also used self keyword
Leopard::tester2(); //output: Leopard runs faster than Cat
?>

<?php
class User{
    static protected $user = 'normal user';
    public static function getUser()
    {
        echo self::$user."<br/>";
    }
    public static function getUser2()
    {
        echo static::$user."<br/>"; //enable override
    }
}
class Agent extends User{
    static protected $user = "User is an agent"; //override
}
Agent::getUser();
Agent::getUser2();
?>