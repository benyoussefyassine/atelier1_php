<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>

<?php
require_once 'navbar.php'; 
$Nom = "benyoussef";
$Pre = "yassine";

echo "<h3>Sur une seule ligne :</h3>";
echo $Nom . " " . $Pre;


echo "<h3>Sur deux lignes :</h3>";
echo $Nom . "<br>" . $Pre;


$info = $Nom . " " . $Pre;
?>


<h3>Tableau</h3>
<table border="1" class="table">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
        <tr>
            <td><?php echo $Nom; ?></td>
            <td><?php echo $Pre; ?></td>
        </tr>
    
</table>
<script>
    alert("<?php echo $info; ?>");
</script>
<p><a href="index.php">← Retour au menu</a></p>
</body>
</html>