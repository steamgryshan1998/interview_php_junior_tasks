<?php
// Fibonacci
    function Fibonacci($f){
        $fib = array(0,1);
        for($i = 2; $i <= $f; $i++){
            $fib[$i] = $fib[$i-1] + $fib[$i-2];
        }
        echo $fib[$f]."\n";
    }
    
    Fibonacci(8);
?>
