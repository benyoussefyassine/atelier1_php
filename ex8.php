<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="a" placeholder="Entrez un nombre" required>
        <button type="submit">envoyer</button>
    </form>
    <?php
    if (isset($_POST['a'])) {
        $a = $_POST['a'];
        if($a%2 == 0) {
            echo "$a est pair";
        } else {
            echo "$a est impair";
        }
    }
     ?>
</body>
</html>