<?php
// create a function that checks the words for the same letters the same number of times
    function Anagram($a, $b){
        $a = mb_strtolower($a);//Making a string lowercase
        $b = mb_strtolower($b);
        $ar = str_split($a);// Converting string to the array
        $br = str_split($b);
        for($i = 0; $i < strlen($a); $i++){//strlen($a) - the length of the string $a
            if(in_array($ar[$i], $br)){//Checks if a value is in the array
                continue;//skipping the remainder of the current iteration 
            }  else {
                echo "False\n";//"\n" - newline
                return false;
            }
        }
        echo "True\n";
        return true;
    }
    
    Anagram("Friend","inder");//Calling a function
    Anagram("true","true");
?>
