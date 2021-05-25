<?php
require_once( "conexion.php" );
$id = $_GET["id"];
$con = Conect();
$consulta = "SELECT * FROM asesores WHERE id = '$id'";
$result = $con->prepare( $consulta );
$result->execute();
$resultado = $result->fetch( PDO::FETCH_OBJ );

var_dump($resultado);
$imagen = $resultado->imagen;

unlink( $imagen );

$qry = "DELETE FROM asesores WHERE id ='$id'  ";
$result = $con->prepare( $qry );
$result->execute();
if ( !$result ) {
    echo 'No se logro realizar la peticion';
} else {
    header( "Location: lista_asesores.php" );
}
?>
