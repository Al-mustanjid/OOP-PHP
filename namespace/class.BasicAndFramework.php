<?php
/* we can also keep multiple namespaces in a file
    but this time it have to keep between {}
*/
namespace BasicTutorial {
class Tutorial{
    public $title = "Default";
    public function printInfo(){
        echo "This is in Basic Tutorial Namespace"."<br/>";
    }
}
}

namespace FrameworkTutorial{
class Tutorial{
    public $title = "Default";
    public function printInfo(){
        echo "This is in Framework Tutorial Namespace"."<br/>";
    }
}
}