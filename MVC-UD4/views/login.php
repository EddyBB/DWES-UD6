<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h2>Inicia sesión</h2>
    <form class="form-register" action="index.php?controller=usuarios&action=loginUser" method="POST">
        <p>Nombre:</p>
        <p><input type="text" placeholder="Ingrese su nombre" name="nombre" /></p>
        <p>Password:</p>
        <p><input type="password" placeholder="Ingrese su contraseña" name="contrasenya" /></p>
        <p><input type="submit" value="Iniciar Sesion" /></p>
        <p><?php echo $error; ?></p>
    </form>
</body>

</html>