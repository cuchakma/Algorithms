<?php
$array = [8, 5, 10, 7, 9, 4, 15, 12, 90, 13];
$k = 4; 

/**
 * brute force approach
 */

for( $i = 0; $i < count($array)-$k; $i++ ) {
    $max = $array[$i];
    for( $j = 1; $j < $k; $j++ ) {
        if( $array[$i+$j] > $max ) {
            $max = $array[$i+$j];
        }
    }
    echo $max."\n";
}