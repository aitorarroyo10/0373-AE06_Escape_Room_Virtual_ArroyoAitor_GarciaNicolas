<?php

//Comienzo

if (isset($_POST['comienzo']) && ($_POST['bienvenida'])=='Comenzar') {

    session_start();
    $_SESSION['reto1']='check';

    header('Location: ../retos/reto1.php');

} else if (isset($_POST['bienvenida'])){
    header('Location: ../bienvenida.php?msg=Escriba "Comenzar"');
}

//Reto 1

else if (isset($_POST['reto1']) && ($_POST['protagonista'])=='Son Goku'){

    session_start();
    $_SESSION['reto2']='check';

    header('Location: ../retos/reto2.php');

} else if (isset($_POST['reto1'])){
    header('Location: ../retos/reto1.php?msg=Pista: Viralizó el "Kamehameha"');
}

//Reto 2

else if (isset($_POST['reto2']) && ($_POST['fases'])=='3'){

    session_start();
    $_SESSION['reto3']='check';

    header('Location: ../retos/reto3.php');

} else if (isset($_POST['reto2'])){
    header('Location: ../retos/reto2.php?msg=Pista: Menos de 5"');
}

//Reto 3

else if (isset($_POST['reto3']) && ($_POST['villano'])=='Freezer'){

    session_start();
    $_SESSION['reto4']='check';

    header('Location: ../retos/reto4.php');

} else if (isset($_POST['reto3'])){
    header('Location: ../retos/reto3.php?msg=Pista: Congelador en inglés"');
}

//Reto 4

else if (isset($_POST['reto4']) && ($_POST['universos'])=='12'){

    session_start();
    $_SESSION['congratulations']='check';

    header('Location: ../final/congratulations.php');

} else if (isset($_POST['reto4'])){
    header('Location: ../retos/reto4.php?msg=Pista: Más de 10, menos de 15"');
}











?>