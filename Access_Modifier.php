<?php
//For encapsulation and privacy, in oop access modifier is available for doing this job.
/*=======================================================================================
three options are available
    1.Public: The properties and methods can be accessed anywhere inside and outside of class
    2.Private: The properties and methods only access by the creator class
    3.Protected: The properties and methods are accessed by own class and inherted class 
    =======================================================================================*/

class MyClass{
    //Declaring $font_size as public property
    public $font_size = '18px';
    //Declaring $font_color as private property
    private $font_color = 'red';
    //declaring $string name as protected property 
    protected $string = 'Access Modifier';
    
    function PropertyPrint(){
        echo $this->font_size.'<br/>';
        echo $this->font_color.'<br/>';
        echo $this->string.'<br/>';
    }
}
$obj = new MyClass();
echo $obj->font_size.'<br/>'; //display 18px
@$obj->font_color; //it creates fatal error
@$obj->string; //it creates fatal error
$obj->PropertyPrint();