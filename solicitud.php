<?php
    use Illuminate\Database\Capsule\Manager as DB;
    
    require 'vendor\autoload.php';
    require 'config\database.php';

    DB::table('solicitud')->insert([
        'tutor' => $_POST['tutor'],
        'pais' => $_POST['pais'],
        'nombreniño' => $_POST['nombreniño'],
        'correo' => $_POST['correo'],
        'numero' => $_POST['numero'],
    ]);

    header("Location:guarderia.php");