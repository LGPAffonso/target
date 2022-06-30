<?php

$texto = $_POST['text'];
$aux =Array();
$split = str_split($texto);
$cont = count($split)-1;

foreach($split as $key=>$value){
    array_push($aux,$split[$cont]);
    $cont--;
}
$texto = implode($aux);
echo $texto;
