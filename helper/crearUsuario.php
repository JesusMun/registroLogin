<?php
$datos_json=file_get_contents("../datos.json");
$datos=json_decode($datos_json, true);
$dat=$datos['datos'];
if(!empty($_POST['nombre']) && !empty($_POST['contraseña'] && !empty($_POST['rol']))){
    $nombre=$_POST['nombre'];
    $contraseña=$_POST['contraseña'];
    $rol=$_POST['rol'];
    $cont=0;
    foreach($dat as $value) {
        $cont++;
    }
    //{"nombre":"pepe4","contrasena":"pepe4","rol":"otro"}
    $arr=array('nombre'=>$nombre,'contrasena'=>$contraseña,"rol"=>$rol);
    array_push($datos['datos'],$arr);
    $datosJson=json_encode($datos);
    file_put_contents('../datos.json',$datosJson);
    header("Location:../vista/adminInicio.php");
}else{
    header("Location:../vista/crear.php");
}    
?>