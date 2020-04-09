<?php
// vowel
    function vowel(&$w){
        $c = 0;
        $arr = str_split($w);
        $v = array("a","e","i","o","u");
        for($i = 0; $i < count($arr); $i++){
            if(in_array($arr[$i], $v)){
                $c++;
            }
        }
        echo $c." ";
    }
    $a = array("alphabet","potato","sorry");
    foreach($a as $val){
        vowel($val);
    }
?>
