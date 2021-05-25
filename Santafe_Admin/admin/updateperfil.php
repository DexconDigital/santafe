<?php
require_once 'conexion.php';

$id = $_REQUEST["id"];
$usuario = $_REQUEST["usuario"];
$pass = $_REQUEST["pass"];
$nombre = $_REQUEST["nombre"];
$telefono = $_REQUEST["telefono"];
$cargo = $_REQUEST["cargo"];
$dependencia = $_REQUEST["dependencia"];
$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$destino = "images/".$foto;
$comparador = "images/";
$con = Conect();
if ( $destino == $comparador ) {
    $qry = ( "UPDATE `usuarios` SET `usuario` = '$usuario', `password` = '$pass', `nombre` = '$nombre', `telefono` = '$telefono', `cargo` = '$cargo', `dependencia` = '$dependencia' WHERE `usuarios`.`id_user` = $id;" );
    $result = $con->prepare( $qry );
    $result->execute();
    header( "Location: index.php" );
} else {
    copy( $ruta, $destino );
    $qry = ( "UPDATE `usuarios` SET `usuario` = '$usuario', `password` = '$pass', `nombre` = '$nombre', `telefono` = '$telefono', `cargo` = '$cargo', `dependencia` = '$dependencia', `imagen` = '$destino' WHERE `usuarios`.`id_user` = $id;" );
    $result = $con->prepare( $qry );
    $result->execute();
    header( "Location: index.php" );
}
?>