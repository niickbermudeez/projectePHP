<?php
    $cadena_connexio = 'mysql:dbname=phpmyadmin;host=localhost:3335';
    $usuari = 'root';
    $passwd = '';
    try{
        //Ens connectem a la BDs
        $db = new PDO($cadena_connexio, $usuari, $passwd);

        if ($db != null) {
            // echo '<pre>';
            // echo "Connexió establerta! \n ";
            // echo '</pre>';
            echo 'Connexió establerta!<br>';
        }
        
        //Tallem la connexió a la BDs
        $db = null;
    }catch(PDOException $e){
        echo 'Error amb la BDs: ' . $e->getMessage() . '<br>';
    }