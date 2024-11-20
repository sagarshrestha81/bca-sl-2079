<?php


class Car{

    // public $seats,$tyres,$abs,$brand,$model;

    function __construct($brand,$model,$seats,$tyres,$abs){
        $this->brand =$brand;
        $this->model =$model;
        $this->seats =$seats;
        $this->tyres =$tyres;
        $this->abs =$abs;
        
    }

    public function detail(){
        echo "This car brand is ". $this->brand. "<br>";
        echo "This car model is ". $this->model. " <br>";
        echo "This car has ". $this->seats. "seats <br>";
        echo "This car has ". $this->tyres. "Tyres <br>";
        echo "This car has ". $this->abs. "abs <br>";
        echo "<hr>";
    }


}

$swift = new Car("Suzuki","Swift",4,4,"NO");
// $swift->brand= "Suzuki";
// $swift->model= "Swift";
// $swift->seats= 4;
// $swift->tyres= 4;
// $swift->abs= "No";


// $thar = new Car();
// $thar->brand= "Mahendra";
// $thar->model= "Thar";
// $thar->seats= 7;
// $thar->tyres= 5;
// $thar->abs= "Yes";

echo $swift->detail();
// echo $thar->detail();

