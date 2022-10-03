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
    <?php 
        echo "NOMBRE: ".$_GET['nombre']."<br>";
        echo "CONTRASEÑA: ".$_GET['contraseña']."<br>";
        echo "ROL: ".$_GET['rol']."<br>";
    ?>
    <form action="../helper/editarUsuario.php" method="post">
        Nombre nuevo= <input type='text' id='nomb' name='nomb'><br>
        Contraseña nueva= <input type='text' name='contra'><br>
        Rol nuevo= <input type='text' name='r'><br>
        <button type='submit'>Edita</button>
    </form>
</body>
</html>