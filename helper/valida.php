<?php
    $aux=false;
    $datos_json=file_get_contents("../datos.json");
    $datos=json_decode($datos_json, true);
    $dat=$datos['datos'];
    if(isset($_POST['usuario']) && isset($_POST['contraseña']) && !empty($_POST['usuario']) && !empty($_POST['contraseña'])){
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];
        foreach($dat as $value){
            if($usuario==$value["nombre"]&&$contraseña==$value["contrasena"]){
                $aux=true;
                $rol=$value["rol"];
            }
        }
        if($aux==true&&$rol=="admin")
            header("Location:../vista/adminInicio.php");
        else if ($aux==true&&$rol=="otro")
            header("Location:../vista/otroInicio.php");
        else
            header("Location:../vista/login.php");
    }else{
        header("Location:../vista/login.php");
    }
?>
