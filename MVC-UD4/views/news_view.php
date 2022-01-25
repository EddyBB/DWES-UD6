<html>

<head>
    <title>Periodicos</title>
</head>

<body>
    <h1>Lista de periodicos</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            
        </tr>
        
        <?php foreach ($periodicos as $periodico): ?>
        
            <tr>

                <td><?php echo $periodico['Nombre']?></td>
                <td><?php echo $periodico['Fecha']?></td>
                

            </tr>

        <?php endforeach; ?>
    </table>
</body>

</html>