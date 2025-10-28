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


