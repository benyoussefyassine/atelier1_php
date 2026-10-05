<?php
include 'navbar.php';
$jour=rand(1,7);

switch ($jour) {
    case 1:
        echo 'lundi';
        break;
    case 2:
        echo 'mardi';
        break;
    case 3:
        echo 'mercredi';
        break;
    case 4:
        echo 'jeudi';
        break;
    case 5:
        echo 'vendredi';
        break;
    case 6:
        echo 'samedi';
         break;
    case 7:
        echo 'dimanche';
        break;

    default:
        echo 'error';
        break;
}



?>