<?php 
$N = 16;
$M = 20;

echo 'Исходные данные N: '.$N.'; M:'.$M.';';

$i = 1;
$answer = 0;
$return = true;
while ($return == true){
    if (($i % $N == 0) && ($i % $M == 0)){
        $answer = $i;
        $return = false;
    }
    $i++;
}

echo '<br>Ответ: '.$answer;
?>