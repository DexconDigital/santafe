<?php
require_once( "conexion.php" );
$id = $_GET["id"];
$con = Conect();
$consulta = "SELECT * FROM noticias WHERE id = '$id'";
$result = $con->prepare( $consulta );
$result->execute();
$resultado = $result->fetch( PDO::FETCH_OBJ );

$imagen = $resultado->imagen;
$archivo = $resultado->archivo;

unlink( $archivo );
unlink( $imagen );

$qry = "DELETE FROM noticias WHERE id ='$id'  ";
$result = $con->prepare( $qry );
$result->execute();
if ( !$result ) {
    echo 'No se logro realizar la peticion';
} else {
    header( "Location: lista-publicaciones.php" );
}
?>
