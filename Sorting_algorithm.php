<?php 

function FirstReverse($str) {
  $s = str_split($str);
  if($s%2 == 0){
    for($i = 0; $i < count($s)/2; $i++){
      $f = $s[$i];
      $s[$i] = $s[count($s) - $i - 1];
      $s[count($s) - $i - 1] = $f;
    }
  } else {
    for($i = 0; $i < (count($s)-1)/2; $i++){
      $f = $s[$i];
      $s[$i] = $s[count($s) - $i - 1];
      $s[count($s) - $i - 1] = $f;
    }
  }
  
  $str = implode("", $s);
  return $str;

}
   
// keep this function call here  
echo FirstReverse(fgets(fopen('php://stdin', 'r')));  

?>
