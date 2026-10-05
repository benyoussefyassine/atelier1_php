<?php

$n = rand(1, 100); // Premier tirage aléatoire

// Tant que le nombre est impair, on continue de tirer
while ($n % 2 != 0) {
    $n = rand(1, 100);
}

echo "le premier entier pair obtenu par tirage aléatoire : $n";

?>