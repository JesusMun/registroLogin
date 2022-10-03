<?php
    $datos_json=file_get_contents("../datos.json");
    $datos=json_decode($datos_json, true);
    $dat=$datos['datos'];
    echo "NOMBRE: ".$_GET['nombre']."<br>";
    echo "CONTRASEÑA: ".$_GET['contraseña']."<br>";
    echo "ROL: ".$_GET['rol']."<br>";
    $cont=-1;
    foreach ($dat as $value) {
        $cont++;
        if($value['nombre']==$_GET['nombre']){
            $aux=$cont;
        }
    }
    array_splice($datos['datos'],$aux,1);
    $datosJson=json_encode($datos);
    file_put_contents('../datos.json',$datosJson);
    header("Location:../vista/adminInicio.php");