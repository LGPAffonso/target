<?php

$total=0.0;

$estados = array(array(67836.43,"SP"),
array(36678.66,"RJ"),
array(29229.88,"MG"),
array(27165.48,"ES"),
array(19849.53,"Outros"),
);

foreach($estados as $key=>$value){
    $total+= $value[0];
}
foreach($estados as $key=>$value){
    echo "O estado de ".$value[1]." teve o percentual de ".(($value[0]/$total)*100)."% do total do faturamento</br>";
}
