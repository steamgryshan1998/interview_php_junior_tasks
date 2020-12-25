<?php
/**
 * @return array An array of two elements containing roots of the 
    quadratic equation in any order
 */
function findRoots($a, $b, $c)
{
    $xs = array();
    $x1 = ($b*(-1) + sqrt($b**2 - 4*$a*$c))/(2*$a);
    array_push($xs, $x1);
    $x2 = ($b*(-1) - sqrt($b**2 - 4*$a*$c))/(2*$a);
    array_push($xs, $x2);
    return $xs;
}

print_r(findRoots(2, 10, 8));
