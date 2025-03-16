<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.microsoft.icon" href="fontawesome/dragon-solid.svg">
    <link rel="stylesheet" href="css/styles.css">
    <title>Bienvenida</title>
</head>

<body>
    
     <div class="container">

         <h1>¡Bienvenido al Escape Room de Dragon Ball!</h1>

         <form action="verificaciones/res.proc.php" method="post">
             <input type="text" name="bienvenida" placeholder="Escriba Comenzar para empezar con el Escape Room...">
             <input type="submit" name="comienzo">
        </form>

    </div>
        <?php
        if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
        }
        ?>
</body>

</html>