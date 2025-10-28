<?php
    require_once("conexionBD.php");

    include_once('delete.php');
    
    $conexion=abrir_conexion("localhost","root","","isaac");
    $consulta="SELECT * from items";
    $query=mysqli_query($conexion,$consulta);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Lista items</title>

</head>
<body>
    <a href="index.php">Inicio</a>
    <h1>Lista de items</h1>
    <?php
        while($row=mysqli_fetch_assoc($query)){?>

            <div>
                <?= $row['nombre']; ?>
            
                <a href="delete.php?id=<?= $row['id_item']; ?>" onclick="return confirmarDoble()">Eliminar</a>
            </div>";
        <?php }
        /*
            #Podriamos añadir el boton de editar aqui como lo haciamos con carlos

            #He añadido el boton a lado de eliminar, mas comodo
        */
            ?>
</body>
</html>