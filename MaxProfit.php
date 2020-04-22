<?php
// You have a list of stock prices for N days(in the form of an array), 
// you need to determine the maximum profit for one purchase and sale operation 
    function MaxProfit(&$arr){//
        $max = NULL;//initialization of variable
        for($i = 1; $i < count($arr); $i++){//going alone the array(list of stock prices)
            for($j = $i-1; $j >= 0; $j--){//going back to get the values of difference
                if($arr[$i] - $arr[$j] > $max){//checking the current difference with the maximum 
                    $max = $arr[$i] - $arr[$j];
                }
            }
        }
        echo $max."\n";
    }
    
    $a = array(9, 6, 13, 10, 20, 2);
    MaxProfit($a);//calling a function
    $b = array(20, 11, 10, 8, 5, 2);
    MaxProfit($b);
