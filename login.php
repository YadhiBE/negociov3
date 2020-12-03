<?php
    use Illuminate\Database\Capsule\Manager as DB;

    require 'vendor\autoload.php';
    require 'config\database.php';
    
    $users = DB::table('usuarios')
    ->leftJoin('perfiles', 'usuarios.perfiles_idperfil', '=', 'perfiles.idperfil')
    ->where('usuarios.usuario', $_POST['usuario'])
    ->first();

    if ($users->contraseña == $_POST['contraseña']){
        header("Location:guarderia.php");
    }
    else {
        header("Location:fallo.html");
    }