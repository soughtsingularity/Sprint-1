<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['nombre']) && !empty($_POST['edad'])){
        echo '<h2>Nombre de usuario</h2>';
        echo '<p>'.$_POST['nombre'].'</p>';
        echo '<h2>Edad del usuario</h2>';
        echo '<p>'.$_POST['edad'].'</p>';
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['edad'] = $_POST['edad'];
        // echo $_SESSION['nombre'];
    }else{
        echo '<p>Introduce todos los datos del formulario</p>';
        echo '<a href="n1_avanzado.html">Volver</a>';
    }
}

/*
    Iba a hacer lo siguiente -> $nombre = $_POST['nombre']; para mostrar a través del echo la variable $nombre, pero el enunciado
    me ha hecho dudar de si se quería mostrar el nombre introducido en el formulario expresamente usando $_POST['nombre]
*/
?>

    