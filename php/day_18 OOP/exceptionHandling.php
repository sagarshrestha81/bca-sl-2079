<?php

try {
    $amount = 1000;
    if($amount >= 500){
        echo "amount withdraw";
    }else{
throw new Exception("amount cant withdraw less then 500");
    }

}catch(Exception $e){
echo $e->getMessage();
}finally{
    echo "thank you for banking";
}