<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon/bowl-food-solid.png">
    <link rel="stylesheet" href="../css/styles.css">
    <title>FELICIDADES</title>
</head>
<body>

<?php
    session_start();
    if (!($_SESSION["congratulations"]=='check')) {
        header("Location: ../index.php");
    }
?>

    <div class="container">

        <h1>Enhorabuena, ¡has completado el Escape Room! ¿Quieres volver a jugar?</h1>

    <a href="../index.php">Volver a jugar</a>

    </div>

</body>
</html>