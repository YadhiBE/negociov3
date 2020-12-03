<?php
    use Illuminate\Database\Capsule\Manager as DB;
    
    require 'vendor\autoload.php';
    require 'config\database.php';

    DB::table('usuarios')->insert([
        'usuario' => $_POST['usuario'],
        'contraseña' => $_POST['contraseña'],
    ]);

    header("Location:guarderia.php");