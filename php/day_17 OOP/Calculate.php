<?php

class Calculate
{
    public $a,$b,$c;
    public function add(){
        $this->c =$this->a + $this->b;
        return $this->c;
    }  
    public function sub(){
        $this->c =$this->a - $this->b;
        return $this->c;
    }  

}

$calc =  new Calculate();

$calc->a =10;
$calc->b =10;
echo $calc->add() ."<br/>";
echo $calc->sub() ."<br/>";

$calcb =  new Calculate();

$calcb->a =6;
$calcb->b =10;
echo $calcb->add()."<br/>";
