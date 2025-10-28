<?php
include_once('conexionBD.php');
include_once('lista.php');



if(isset($_GET['id'])){

/*
    #Problema en la consulta
    #Solucionado

*/

$del = "Delete from items where id_item=".$_GET['id'];

if(mysqli_query($conexion,$del)){

    echo "Borrado con exito";
    header("Location:lista.php");
}else{

    echo "Problema en el borrado ";
}
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
function confirmarDoble() {
    if (confirm("¿Estás seguro de que quieres eliminar este elemento?")) {
    return confirm("¿De verdad estás completamente seguro?");
    }
    return false;
}
</script>
    
</body>
</html>


