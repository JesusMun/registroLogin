<?php
    $datos_json=file_get_contents("../datos.json");
    $datos=json_decode($datos_json, true);
    $dat=$datos['datos'];
    $cont=0;
    if(!empty($_POST['nomb']))
        $nombre=$_GET['nombre'];
    else
        $nombre=$_POST['nomb'];
    if(!empty($_POST['contraseña']))
        $contraseña=$_GET['contraseña'];
    else
        $contraseña=$_POST['contra'];
    if(!empty($_POST['rol']))
        $rol=$_GET['rol'];
    else
        $rol=$_POST['r'];
    foreach ($dat as $value) {
        $cont++;
        if($value['nombre']==$_GET['nombre']){
            $value['nombre']=$nombre;
            $value['contrasena']=$contraseña;
            $value['rol']=$rol;
        }
    }
    $datosJson=json_encode($datos);
    file_put_contents('../datos.json',$datosJson);
    header("Location:../vista/adminInicio.php");