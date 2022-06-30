<?php

$num = $_POST['fib'];

$array = [0,1];

$a = 0;
$b= 1;
$limite = $num + 30;
$tem = false;

while ($array[count($array)-1]<$limite){
    $c = $a + $b;
    $array[count($array)] = $c;
    $a = $b;
    $b = $c;
}

// var_dump($array);

foreach($array as $key=>$value){
    if($num == $value){
        $tem = true;
    }

}

if($tem){
    echo "O numero ".$num." pertence a sequencia de Fibonacci";
}else{
    echo "O numero ".$num." não pertence a sequencia de Fibonacci";
}