<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>
    <h2>Exercice 3 : Résultat des expressions</h2>

    <?php
    // 1ère expression
    $a = 5;
    echo "Résultat 1 : ";
    if (is_int($a) && ($a % 2 == 0) && ($a < 10 && $a > 5)) {
        echo "VRAI<br>";
    } else {
        echo "fAUX<br>"; 
    }

    // 2ème expression
    $b = TRUE;
    $c = FALSE; 
    echo "Résultat 2 (AND) : " . (($b AND $c) ? 1 : 0) . "<br>";
    echo "Résultat 2 (OR) : " . (($b OR $c) ? 1 : 0) . "<br>";

    // 3ème expression
    $nom = "";
    echo "Résultat 3 : " . (($nom == "") ? "inconnu" : $nom) . "<br>";

    //4ème expression
    $sexe = "M";
    echo "Résultat 4 : " . (($sexe == "F") ? "Madame" : "Monsieur") . "<br>";

    // 5ème expression
    $nom = "Cherif";
    echo "Résultat 5 : " . ($nom ?? "inconnu") . "<br>";

    // 6ème expression ($prenom n'est pas défini)
    echo "Résultat 6 : bonjour " . ($prenom ?? "inconnu") . "<br>";

    // 7ème expression
    echo "Résultat 7 : bonjour " . ($prenom ?? $nom ?? "inconnu") . "<br>";
    ?>

    <p><br><a href="index.php">Retour au menu</a></p>
</body>
</html>