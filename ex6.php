<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Addition</title>
</head>
<body>

<?php
require_once 'navbar.php';?>

    <form method="post" action="">
    <label>Valeur 1 :</label>
    <input type="number" name="val1" required>
    
    <label>Valeur 2 :</label>
    <input type="number" name="val2" required>
    
    <input type="submit" name="calculer" value="Calculer">
</form>



<?php

if (isset($_POST['calculer'])) {
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $resultat = $val1 + $val2;

    echo "<p>Le résultat est : " . $resultat . "</p>";
}
?>
<p><a href="index.php">← Retour au menu</a></p>
</body>
</html>