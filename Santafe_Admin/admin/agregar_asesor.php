<?php
require_once 'conexion.php';

$nom_asesor = $_REQUEST["nom_asesor"];
$cel_asesor = $_REQUEST["cel_asesor"];
$cor_asesor = $_POST["cor_asesor"];
$image = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace( " ", "", $image );
$destino = "asesores/".$nombre_foto ;
$fecha = $_REQUEST["fecha"];
$fecha = date( "Y-m-d" );
$cargo = $_REQUEST["cargo"];
$descrip = $_REQUEST ["descrip"];
$id_inmo = 14;

$con = Conect();
copy( $ruta, $destino );

$sql = ( "INSERT INTO `asesores` (`id`, `nombre`,`telefono`,`correo`,`imagen`,`id_inmobiliaria`,`fecha`,`cargo`,`descripcion`) VALUES (NULL, '$nom_asesor','$cel_asesor','$cor_asesor','$destino','$id_inmo','$fecha','$cargo','$descrip')" );
$result = $con->prepare( $sql );
$result->execute();

header( "Location: lista_asesores.php" );

?>
