<?php

// $a=10;
// $b=20;

// echo $a+$b;
// echo "<br/>";
// ;echo $a-$b;
// echo "<br/>";
// echo $a/$b;
// echo "<br/>";
// echo $a*$b;
// echo "<br/>";
// echo $a%$b;
// echo "<br/>";
// echo $a++;
// echo "<br/>";
// echo ++$a;
// echo "<br/>";
// echo $a--;
// echo "<br/>";
// echo --$a;
// echo "<br/>";


// // $c = $a+$b;

// // $a=$a+$b;
// echo "a value is ".$a ;
// echo "b value is ".$b ;

// echo "<br/>";
// $a += $b;

// echo "sum value of a and b ".$a."a b c d";

// $a="class teacher";
// echo "to <br/> the $a";
// echo "<br/>";
// echo 'apple $a';

// $arr= array(1,"ram","koteshwor",980);
// $arr= array(
//     "roll_no"=>1,
//     "name"=>"ram",
//     "address"=>"koteshwor",
//     "phone"=>980);
$arr= ["roll_no"=>1,
    "name"=>"ram",
    "address"=>"koteshwor",
    "phone"=>980];

// echo $arr;
// print_r($arr);
// echo $arr["roll_no"];
// echo $arr["name"];
// echo $arr["address"];

// foreach($arr as $arr_key => $arr_value){
//     echo "$arr_key  = $arr_value <br/>";
// }
$a=-10;
if($a == 0){
    echo "a zero";
}
elseif($a>0){
    echo "a positive";
}
else{    
    echo "a is negative";
}