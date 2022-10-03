<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuario a editar</h1>
    <form action="../helper/editarUsuario.php" method="post">
    <?php
        $cont=-1;
        $datos_json=file_get_contents("../datos.json");
        $datos=json_decode($datos_json, true);
        $dat=$datos['datos'];
        foreach ($dat as $value) {
            $cont++;
            if($value['nombre']==$_GET['nombre']){
                $aux=$cont;
            }
        }
        echo "<input type='hidden' id='cont' name='cont' value='".$cont."'><br>";
        echo "NOMBRE: <input type='text' id='nomb' name='nomb' value='".$_GET['nombre']."'><br>";
        echo "CONTRASEÑA: <input type='text' name='contra' value='".$_GET['contraseña']."'><br>";
        if($_GET['rol']=='admin')
            echo "ROL: <input type='radio' name='r' value='admin' checked> otro <input type='radio' name='r' value='otro'><br>";
        else
            echo "ROL: <input type='radio' name='r' value='admin'> otro <input type='radio' name='r' value='otro' checked><br>";
    ?>
        <button type='submit'>Edita</button>
    </form>
</body>
</html>