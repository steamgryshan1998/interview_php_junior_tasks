<?php

//declare(strict_types=1);

$array = [
    'Input.txt'  => 'Randy',
    'Code.py'    => 'Stan',
    'Output.txt' => 'Randy',
];

function groupByOwners(array $array): array
{
    $result = [];//create redone array

    foreach ($array as $key => $value) {
        if (!array_key_exists($value, $result)) {//if name is not exist in redone array
            $result[$value] = [];//we should create an array of owns of this name
        }

        //$result[$value][] = $key;
        array_push($result[$value], $key);//add filename to special array
    }

    return $result;
}

var_dump(groupByOwners($array));
