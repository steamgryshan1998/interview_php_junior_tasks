<?php
// Write a function which replaces a digits that are multiple of 3 or 5, or 3 and 5
function  fb($x){
    for($i = 1; $i < $x; $i++){
        switch($i){
            case ($i % 3 == 0)&&($i % 5 == 0)://if number is a multiple of 3 and 5
                echo "fizzbuzz ";
                break;
            case $i % 3 == 0://if number is a multiple of 3
                echo "fizz ";
                break;
            case $i % 5 == 0://if number is a multiple of 5
                echo "buzz ";
                break;
            default:
                echo $i." ";
                break;        
        }
    }
}

fb(100);//calling a function 
?>
