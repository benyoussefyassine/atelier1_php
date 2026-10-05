<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php require_once 'navbar.php'; ?>
    <div class="container">
    <table border="1" class="table " >
        <tr class="table-primary">
            <th>fruites</th>
            <th>calories</th>
        </tr>
   <?php 
    $fruits=['pomme'=> 300,'orange'=>60,'fraise'=>200,'banane'=>400];
    foreach ($fruits as $b => $a) {
    ?>
        <tr><td><?= $b ?></td><td><?= $a ?></td></tr>
        
    <?php    
    }
   ?>
    </table>
    </div>
    
</body>
</html>