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
    <form action="../helper/crearUsuario.php" method="post"></form>
        <label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre"><br>
        <label for="contraseña">Contraseña:</label><input type="password" name="contraseña" id="contraseña"><br>
        <label for="rol">Rol: </label>
        admin <input type="radio" name="rol" value="admin"> otro <input type="radio" name="rol" value="otro"><br>
        <button type="submit">Aceptar</button>
    </form>
</body>
</html>