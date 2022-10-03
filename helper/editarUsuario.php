<?php
    $datos_json=file_get_contents("../datos.json");
    $datos=json_decode($datos_json, true);
    $dat=$datos['datos'];
    $cont=$_POST['cont'];
    $nombre=$_POST['nomb'];
    $contraseña=$_POST['contra'];
    $rol=$_POST['r'];
    $aux=-1;
    foreach ($dat as $value) {
        $aux++;
        if($aux==$cont){
            $arr=array('nombre'=>$nombre,'contrasena'=>$contraseña,"rol"=>$rol);
            array_splice($datos['datos'],$arr);
        }
    }
    var_dump($datos);
    //$datosJson=json_encode($datos);
    //file_put_contents('../datos.json',$datosJson);
    //header("Location:../vista/adminInicio.php");