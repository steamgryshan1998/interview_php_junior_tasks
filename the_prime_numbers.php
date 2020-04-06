<?php
//writing the program that output the prime numbers from 1 to 100
for($i = 1; $i < 100; $i++){
    if((($i % 2 != 0)||($i == 2)) && (($i % 3 != 0)||($i == 3)) && (($i % 5 != 0)||($i == 5)) && (($i % 7 != 0)||($i == 7)) && ($i != 1)){
        echo $i." "; 
    }
}

//second decision

