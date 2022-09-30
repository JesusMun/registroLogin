<?php
    $datos_json=file_get_contents("../datos.json");
    $datos=json_decode($datos_json, true);
    $dat=$datos['datos'];
    echo "NOMBRE: ".$_GET['nombre']."<br>";
    echo "CONTRASEÑA: ".$_GET['contraseña']."<br>";
    echo "ROL: ".$_GET['rol']."<br>";
    echo "Nombre nuevo= <input type='text' id='nomb' name='nomb'><br>";
    echo "Contraseña nueva= <input type='text' name='contra'><br>";
    echo "Rol nuevo= <input type='text' name='r'><br>";
    echo "<button type='submit'>Edita</button>";
    