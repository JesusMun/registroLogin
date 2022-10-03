<?php
    $datos_json=file_get_contents("../datos.json");
    $datos=json_decode($datos_json, true);
    $dat=$datos['datos'];
    echo "<table border='1'>";
        echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Contraseña</th>";
            echo "<th>Rol</th>";
            echo "<th>Editar</th>";
            echo "<th>Borrar</th>";
        echo "</tr>";
    foreach($dat as $value){
        $nombre=$value['nombre'];
        $contraseña=$value['contrasena'];
        $rol=$value['rol'];
        echo "<tr>";
            echo "<td>".$nombre."</td>";
            echo "<td>".$contraseña."</td>";
            echo "<td>".$rol."</td>";
            echo "<td><a href='../vista/editar.php?nombre=$nombre&contraseña=$contraseña&rol=$rol'>Editar</a></td>";
            echo "<td><a href='../vista/borrar.php?nombre=$nombre&contraseña=$contraseña&rol=$rol'>Borrar</a></td>";
        echo "</tr>";
    }
    echo "<table>";
?>
