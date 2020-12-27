<?php

function unique_names(array $array1, array $array2) : array
{
    $arr = array();
    $array1 = array_unique($array1);//delete elements with repeated values of elements    
    $array2 = array_unique($array2);
    $arr = array_merge($array1, $array2);// merge one or more arrays
    $arr = array_unique($arr);
    return $arr;
}

$names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia
