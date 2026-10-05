<?php
function display_menu() {
    
    $liens = [
        1  => "ex1.php",    
        2  => "ex2.php",      
        3  => "ex3.php",    
        4  => "ex4.php",      
        5  => "facture.php",   
        6  => "ex6.php",      
        7  => "ex7.php",      
        8  => "ex8.php",      
        9  => "ex9.php",      
        10 => "ex10.php"      
    ];

    echo "<h2>Menu des exercices</h2>";
    echo "<ul>";
    foreach ($liens as $num => $page) {
        echo "<li class='nav-item'><a class='nav-link' href='$page'>Exercice $num</a></li>";
    }
    echo "</ul>";
}
?>