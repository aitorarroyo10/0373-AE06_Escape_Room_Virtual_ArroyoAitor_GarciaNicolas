<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon/bowl-food-solid.png">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Prueba nº2</title>
</head>
<body>

<?php
    session_start();
    if (!($_SESSION["reto2"]=='check')) {
        header("Location: ../retos/reto1.php");
    }
?>

    <div class="container">
        <h1>Pregunta número 2: ¿Cuántas fases de Super Saiyan existen, contando únicamente Dragon Ball Z?</h1>
        <form action="../verificaciones/res.proc.php" method="post">
            <input type="text" name="fases" placeholder="Insertar respuesta...">
            <input type="submit" name="reto2">
        </form>

    </div>

    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
    }
    ?>
</body>
</html>