<?php
//PHP scope resultion is defined by :: which is actually used to get access into static, constant and override properties and methods
//1. while $className :: constant syntax is used, $className is now variable
//2. while className :: $VarConstant syntax is used, then we the static constant is used as reference

class MyClass{
    const constant1 = "PHP class constant";
    function PrintConstant(){
        echo self::constant1."<br/>";
    }
}
    echo MyClass::constant1."<br/>"; //using a class 
    $className ="MyClass"; //creating a variable following 1
    echo $className::constant1."<br/>"; //printing with the variable 
    
    $class = new MyClass();
    $class->PrintConstant();
