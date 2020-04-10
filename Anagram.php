<?php
// Anagramm
    function Anagram($a, $b){
        $a = mb_strtolower($a);
        $b = mb_strtolower($b);
        $ar = str_split($a);
        $br = str_split($b);
        for($i = 0; $i < strlen($a); $i++){
            if(in_array($ar[$i], $br)){
                continue;
            }  else {
                echo "False\n";
                return false;
            }
        }
        echo "True\n";
        return true;
    }
    
    Anagram("Friend","inder");
    Anagram("true","true");
?>
