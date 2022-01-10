<?php error_reporting();
//В массиве А(N) все четные элементы заменить максимальным элементом, а нечетные - минимальным. 
$A = [1, 7, 4, 9, 8, 23, 17, 22, -199, 7];

$min = minimal($A);
$max = maximal($A);

echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
print_r(replacementminmax($A, $max, $min));


function replacementminmax($array, $max, $min){
    $resarr = $array;
    for($i = 0; $i < count($resarr);$i++){
        if($resarr[$i] % 2 == 0){
            $resarr[$i] = $max;
        }elseif($resarr[$i] % 2 != 0){
            $resarr[$i] = $min;
        }
    }
    return $resarr;
}

function minimal($array){
    $minv = $array[0];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] < $minv){
            $minv = $array[$i];
        }
    }
    return $minv;
}

function maximal($array){
    $maxv = $array[0];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $maxv){
            $maxv = $array[$i];
        }
    }
    return $maxv;
}

