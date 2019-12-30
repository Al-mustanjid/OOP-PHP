<?php
/* namespace
    Suppose we have same class, function, properties in a script then there will be error
    Suppose in my code, there is a datetime function and I am using a framework
    **The problem is now: this both same things will create an error issue 
    **To data encapsulate and resuing the namespace is used
    **namespace must define at the begining of the class
*/

//There are two classes with same class and script
//but we can both use with the help of namespace

//first initialize both files
// require_once 'class.Basic.php';
// require_once 'class.Framework.php';
//the other two require_once functions can remove as both namespaces are in a same file
require_once 'class.BasicAndFramework.php';
                    //namespace\classname
$objectBasic = new BasicTutorial\Tutorial();
$objectBasic->printInfo();
$objectFramework = new FrameworkTutorial\Tutorial();
$objectFramework->printInfo();