<?php
// Your code here!
    function MaxProfit(&$arr){
        $max = NULL;
        for($i = 1; $i < count($arr); $i++){
            for($j = $i-1; $j >= 0; $j--){
                if($arr[$i] - $arr[$j] > $max){
                    $max = $arr[$i] - $arr[$j];
                }
            }
        }
        echo $max."\n";
    }
    
    $a = array(9, 6, 13, 10, 20, 2);
    MaxProfit($a);
    $b = array(20, 11, 10, 8, 5, 2);
    MaxProfit($b);
