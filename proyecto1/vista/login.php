<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="../helper/valida.php" method="post">
        <p><label>Usuario: </label><input type="text" id="usuario" name="usuario"></p>
        <p><label>Contraseña: </label> <input type="password" id="contraseña" name="contraseña"></p>
        <p><input type="submit" value="Valida"></p>
    </form>
</body>
</html>