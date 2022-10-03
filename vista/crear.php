<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crea un nuevo usuario</h1>
    <form action="../helper/crearUsuario.php" method="post">
        <label>Nombre:</label><input type="text" name="nombre" id="nombre"><br>
        <label>Contraseña:</label><input type="password" name="contraseña" id="contraseña"><br>
        <label>Rol: </label>
        admin <input type="radio" name="rol" value="admin"> otro <input type="radio" name="rol" value="otro" checked><br>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>