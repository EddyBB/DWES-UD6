<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/form.css">
        <title>Edita elemento</title>
    </head>
    <body>
        <?php

        ?>
        <nav>
            <ul>
                <li><a href="index.php">Página principal</a></li>
                <li><a href="create.php">Nuevo elemento</a></li>
                <li><a class="active" href="list.php">Lista elementos</a></li>
                <li><a href="import.php">Importar elementos</a></li>
            </ul>
        </nav>
        <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF'] . "?id=$id"); ?>" method="POST" enctype="multipart/form-data">
            <h2 class="form-titulo">Características:</h2>
            <div class="contenedor-inputs">
                <input type="hidden" name="id" value="<?php echo $sexshop["id"]; ?>"><!--aquí va el id, es hidden por lo tanto no es visible en la web, pero si accesible desde PHP -->
                <input type="text" name="nombreProducto" placeholder="Nombre Producto" class="input-100" value= "<?php echo $sexshop["nombreProducto"]; ?>" required>
                <input type="text" name="modelo" placeholder="Modelo" class="input-100" value= "<?php echo $sexshop["modelo"]; ?>" required>
                <input type="text" name="descripcion" placeholder="Descripción" class="input-100" value= "<?php echo $sexshop["descripcion"]; ?>" required>
                <input type="number" name="precio" placeholder="Precio" class="input-48" value= "<?php echo $sexshop["precio"]; ?>" required>
                <input type="number" name="stock" placeholder="Stock" class="input-48" value= "<?php echo $sexshop["stock"]; ?>" required >
                <input type="date" name="fechaCreacionProducto" placeholder="fechaCreacionProducto" class="input-100" value= "<?php echo $sexshop["fechaCreacionProducto"]; ?>" required>
                <img name="avatarActual" width=200px src="<?php echo "images/".$sexshop['imagen']; ?>"><!-- Aquí tienes que cargar la imagen actual -->
                <input type="file" name="imagen" accept="image/png, image/jpeg" class="input-100" >
                <input type="submit" value="Editar" class="btn-enviar" name="submit">
                <div id="errores"><?php echo $errorInsercion ?></div>
            </div>
        </form>
    </body>
</html>