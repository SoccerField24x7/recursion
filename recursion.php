<?php

$str = "now is the time for all good men to come to the aid of the party";
$answer = "";

$func = function($str, $pos) use (&$func, &$answer) {
    if(strlen($str) === 0) {

        return 1;
    }

    $answer .= substr($str, $pos - 1, 1);

    return $func(substr($str, 0, strlen($str) - 1), strlen($str) - 1);

};

$func($str, strlen($str));

print $answer . "<p>";


$arry = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function which($array, &$idx) {
    if($idx < 0) {
        return 1;
    }

    if($array[$idx] % 2 === 0 && $array[$idx] % 5 === 0) {
        echo "fizzbuzz<br />";
    }
    else if($array[$idx] % 2 === 0) {
        echo "fizz<br />";
    }
    else if($array[$idx] % 5 === 0) {
        echo "buzz<br />";
    }

    $idx--;
    which($array, $idx);
}

$count = count($arry) - 1;
which($arry, $count);
