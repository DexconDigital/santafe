<?php

require( "admin/conexion.php" );

$con = conect();

$nombre = $_REQUEST["user"];
$password = $_REQUEST["pass"];
$id_inmobiliaria = 14;

$qry = "SELECT * FROM usuarios WHERE usuario ='$nombre' and password ='$password' and id_inmobiliaria1 = '$id_inmobiliaria'";
$result = $con->prepare( $qry );
$result->execute();

$row = $result->fetch( PDO::FETCH_OBJ );
$rowcount = $result->rowCount();

if ( $rowcount > 0 ) {
    // output data of each row
    session_start();

    //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
    $_SESSION["autentica"] = "SIP";

    $_SESSION["usuarioactual"] =  $row;

    header ( "Location: admin/index.php" );
    //nombre del usuario logueado.
    //Direccionamos a nuestra página principal del sistema.

} else {
    header ( "Location: index.php" );
}
?>