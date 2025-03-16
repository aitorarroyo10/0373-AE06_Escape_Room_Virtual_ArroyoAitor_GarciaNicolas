<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon/bowl-food-solid.png">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Prueba nº1</title>
</head>

<body>

<?php
    session_start();
    if (!($_SESSION["reto1"]=='check')) {
        header("Location: ../index.php");
    }
?>

    <div class="container">
        <h1>Pregunta número 1: ¿Quién es el protagonista de la franquicia?</h1>
        <form action="../verificaciones/res.proc.php" method="post">
            <input type="text" name="protagonista" placeholder="Insertar respuesta...">
            <input type="submit" name="reto1">
        </form>
    </div>

    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
    }
    ?>
</body>
</html>