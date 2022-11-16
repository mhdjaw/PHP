<?php
function  increment_array ($array,$n) {
    if (is_int($n)== FALSE) {
        echo "L'increment n'est pas un Int\n";
        exit();
    } else {
    for ($i=0 ;$i<count($array); $i+=1) {
        if (is_int($array[$i])== FALSE) {
            echo "L'index".' ' . $i . ' ' . "DE LA CASE n'est pas un Int\n";
            exit();
        } else {
     $array[$i] = $array[$i] + $n; 
        }
    }
    }
    return $array;
}
?>