<?php


interface ParentClass1{

    public function show();
}
interface ParentClass2{

    public function detail();
}
class ChildClass implements ParentClass1,ParentClass2{    
    public function show(){
        echo "this is from child class show";
    }
    public function detail(){
        echo "this is from child class detail";
    }
    
}

$childObj= new ChildClass();
echo $childObj->show();
echo $childObj->detail();



