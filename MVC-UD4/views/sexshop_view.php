<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/botonera.css">
    <link rel="stylesheet" href="./css/table.css">
    <title>Lista elementos</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="?action=todos">Página principal</a></li>
            <li><a href="?action=insertar">Nuevo elemento</a></li>
            <li><a class="active" href="?action=todos">Lista elementos</a></li>

        </ul>
    </nav>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Nombre del producto</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Fecha de creación del producto</th>
                <th>Detalle</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>

        </thead>
        <tbody>
           <!-- Aquí tendrás que mostrar las filas de la tabla-->
           <?php
               
                foreach ($juguetes as $producto) {
                    echo "<tr>";
                    echo "<td>$producto[nombreProducto]</td>";
                    echo "<td>$producto[modelo]</td>";
                    echo "<td>$producto[precio]</td>";
                    echo "<td>$producto[fechaCreacionProducto]</td>";
                    echo "<td><a href='?action=unicoElemento&id=$producto[id]'>Detalles</a></td>";
                    echo "<td><a href='?action=update&id=$producto[id]'>Editar</a></td>";
                    echo "<td><a href='?action=delete&id=$producto[id]'>Borrar</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>