<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Prueba final</title>
</head>
<body>

<?php
    session_start();
    if (!($_SESSION["reto4"]=='check')) {
        header("Location: ../retos/reto3.php");
    }
?>

    <div class="container">
        <h1>Pregunta número 4: ¿Cuántos universos existen en Dragon Ball Super?</h1>
        <form action="../verificaciones/res.proc.php" method="post">
            <input type="text" name="universos" placeholder="Insertar respuesta...">
            <input type="submit" name="reto4">
        </form>

    </div>
<?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
    }
?>
</body>
</html>