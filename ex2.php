<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
    <h2>Exercice 2 : Correction d'erreurs</h2>

    <?php
   //correction
    // $2var -> $var2 
    //  Erreur de guillemets dans echo -> corrigé avec .
    //  print avec virgule -> remplacé par echo

    $var = 'World';
    $var2 = 13;

    echo $var . "<br>" . $var2 . "<br>";
    echo "Hello " . $var;
    ?>

    <p><br><a href="index.php">Retour au menu</a></p>
</body>
</html>