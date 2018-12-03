<?php

function isPalindrome($string) {
    $string = strtolower($string);
    $reverse_string = strrev($string);

    if ($string == $reverse_string)
        return true;
    else
        return false;
}

echo(isPalindrome("Deleveled"));