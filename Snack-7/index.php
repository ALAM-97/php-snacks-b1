<?php 
    require __DIR__ . "/data.php";
    require __DIR__ . "/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($alunni as $alunno) : ?>
        <h2>
            <?php echo $alunno["nome"] . " " . $alunno["cognome"]; ?>
        </h2>
        <div>
            La media dei voti è: <?php echo mediaVoti($alunno["voti"]);  ?>
        </div>
    <?php endforeach; ?>
</body>

</html>