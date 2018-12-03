<?php

function add_element_to_owner($array, $owner, $key) {
    $count = 0;
    foreach ($array as $new_key => $element) {
        if ($new_key == $owner) {
            array_push($array[$new_key], $key);
            $count = 1;
        }
    }
    if ($count == 0)
        $array[$owner] = array($key);
    return ($array);
}

function groupByOwner($array) {
        $new_array = array();
        foreach ($array as $key => $element) {
            $new_array = add_element_to_owner($new_array, $element, $key);
        }
        return($new_array);
}

$test = array(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

print_r(groupByOwner($test));