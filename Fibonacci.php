<?php
// create a function that outputting the value by number in Fibonacci numbers
    function Fibonacci($f){
        $fib = array(0,1);//setting the starting values of the Fibonacci numbers
        for($i = 2; $i <= $f; $i++){
            $fib[$i] = $fib[$i-1] + $fib[$i-2];//calculation the value by certain number
        }
        echo $fib[$f]."\n";//"\n" - newline
    }
    
    Fibonacci(8);//calling a function
?>
