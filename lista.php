<?php
    require("conexionBD.php");
    $conexion=abrir_conexion("localhost", "root", "", "isaac");
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
    <h1>Lista de items</h1>
    <?php
            while($key = mysqli_fetch_assoc( $query)){
                echo "<tr><td>".$key['nombre']."</td><td>".$key['tipo']."</td><td>".$key['efecto']."</td><td>".$key['danho_extra']."</td><td><a href='formularioEditar.php?id_item=".$key['id_item']."'>Editar</a></td></tr>";
            }
    ?>
</body>
</html>