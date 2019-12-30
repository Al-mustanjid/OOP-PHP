<?php
/* There are some functions in php loaded automatically. They are also called magic method such as 
__construct() and __autoload()

we can check overloaded data.

Explore some other magic methods
*/

/*====================================
    get()
    this method is used when need access to a properties which has not been set yet
=====================================*/

/*========================================
    set()
    this method is used when need to change the value of a properties which does not exist in classS
===========================================*/

class MyClass{
    public $title = "Magic Method";

    //overloading not used in declared properties
    //location for overloaded data
    private $content = array();

    //set a property
    public function _set($magic, $value){
        $this->content[$value];
    }  

    //get a property
    public function _get($magic){
        if(is_numeric($this->content[$magic])){
            return FALSE;
        }else{
            return $this->content[$magic];
        }
    }
}

$obj = new MyClass();
//Initialize property; it sets the "setProperty" as $magic and store the value 
$obj->setProperty = "set(), get()";
echo $obj->setProperty."<br/>";
?>

<?php
class AClass{
    protected $id;

    public function setID($id){
        $this->id = $id;
    }

    public function getID(){
        return $this->id;
    }

    
}
$obj = new AClass();
$obj->setID(1);
echo $obj->getID();
?>

<?php
/* _toString()
    :to print or echo an object this function will automatically call
    :if this function is not available at the time of echo or print object, it will commit an error
*/
class MyClass3{
    public $title = "_toString() method";
    public $length;

    public function __toString(){
        return $this->title;
    }
}
$anObject = new MyClass3();
echo $anObject;
?>
