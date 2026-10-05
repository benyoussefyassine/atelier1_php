<?php

$a = 6;
$b = 5;

$res = match ($a <=> $b) {
    -1 => "$a est inférieur a $b",
     0 => "$a est égal a $b",
     1 => "$a est supérieur a $b"
};

echo $res;

?>