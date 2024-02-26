<?php
extract($_REQUEST);

if (isset($nombre)) {
    // Gestionamos
    if (strlen(trim($nombre)) === 0) {
        echo "No cubriste el campo nombre";
    } else if (strlen(trim($email)) === 0) {
                echo "No cubriste el campo email";
    } else {
        // Pintar todo
        echo "Tu nombre es $nombre </br>";
        if ((strlen(trim($apellidos)) === 0)) {
            echo "";
        }else {
            echo "Tu apellido es $apellidos</br>";
        }
        echo "Tu correo es $email</br>";
        if ((strlen(trim($telefono)) === 0)) {
            echo "";
        }else {
            echo "Tu número es $telefono </br>";
        }
        if (isset($sexo)) {
            echo "Tu sexo es $sexo </br>";
        }
    }
    
}
//  else {
//      echo 'No existe';
//      die();
//  }

echo '<a href="./"> Volver </a>';
