<?php


class ParentClass{
    public $name;

    public function show(){
        echo "this is from parent class". $this->name;
    }
}

class ChildClass extends ParentClass{    
    public function show(){
        echo "this is from child class". $this->name;
    }
    
}

$childObj= new ChildClass();
echo $childObj->show();



