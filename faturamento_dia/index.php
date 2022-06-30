<?php 

$arquivo = "dados.json";
$file = fopen($arquivo,"r");
$data = fread($file,filesize($arquivo));
$max =0.0;

$med = 0.0;
$dias = 0;

$fat = json_decode($data);
$min = $fat[0]->valor;

foreach($fat as $key=>$value){   
    if($value->valor>0){
        if($max<=$value->valor){
            $max = $value->valor;
        }
        if($min>=$value->valor){
            $min = $value->valor;
        }
        $med = $med + $value->valor;
        $dias ++;
    }
}
$med = $med / $dias;
$dias = 0;

foreach($fat as $key=>$value){
    if($value->valor>$med){
        $dias++;
    }
}

echo "O menor faturamento em um dia do mês foi: ".$min."</br>";
echo "O maior faturamento em um dia do mês foi: ".$max."</br>";
echo "Quantidade de dias no mês em que o valor de faturamento diário foi superior à média mensal: ".$dias;