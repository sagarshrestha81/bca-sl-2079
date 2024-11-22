<?php
 abstract class ParentClass{

    abstract function admin();
}

class adminClass extends ParentClass{    
    public function admin(){
        echo "this is from admin class";
    }
    
}

$adminClass= new adminClass();
echo $adminClass->admin();



