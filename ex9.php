<?php
$n = rand(1, 100);
if ($n % 3 == 0 && $n % 5 == 0) {
    echo "$n est un multiple de 3 et de 5";
} else {
    echo "$n n'est pas un multiple de 3 et de 5";
}
?>