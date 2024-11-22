<?php


class ParentClass{
    public static $name ="hari";
    public static function show(){
        echo "this is from parent class". self::$name;
    }
}
class ChildClass extends ParentClass{
    function detail(){
        echo "im frm child class ".self::$name;
    }
}

echo ParentClass::$name;
echo "<br>";
echo ParentClass::show();
echo "<br>";
$childObj= new ChildClass();
echo $childObj->detail();



