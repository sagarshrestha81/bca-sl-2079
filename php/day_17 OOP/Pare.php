<?php

class Pare{
    public $name,$age;
    
    public function detail(){
        echo "name is from parent ". $this->name."<br>";
        echo "age is from parent ". $this->age."<br>";
        echo "education is from parent ". $this->education."<br>";
    }    
}
class Chi extends Pare {
    public $education;
    function show(){
        $this->detail();
        echo "name is from child ". $this->name."<br>";
        echo "age is from child ". $this->age."<br>";
        echo "education is from child ". $this->education."<br>";
    }
}


// $parent = new Pare();
// $parent->name= "ram";
// $parent->age= 45;
// $parent->education=8;
// echo $parent->detail();


$child= new Chi();
$child->name= "Luv";
$child->age=14;
$child->education=8;
echo $child->show();
