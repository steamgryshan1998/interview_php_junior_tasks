<?php
// write a function that calculate the number of vowels in the word
    function vowel(&$w){//passing value by reference
        $c = 0;
        $arr = str_split($w);//converting the string to the array
        $v = array("a","e","i","o","u");
        for($i = 0; $i < count($arr); $i++){// count($arr) - shows number of elements an array $arr
            if(in_array($arr[$i], $v)){//Checks if a value is in the array
                $c++;
            }
        }
        echo $c." ";// strings in PHP adding by point(.)
    }
    $a = array("alphabet","potato","sorry");//initializing the array of the words
    foreach($a as $val){// foreach("name of array" as "element of array")
        vowel($val);// calling a function
    }
?>
