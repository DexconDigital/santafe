<?php
require_once ( 'conexion.php' );

$id = $_REQUEST["id"];
$nom_asesor = $_REQUEST["nom_asesor"];
$cel_asesor = $_REQUEST["cel_asesor"];
$cor_asesor = $_POST["cor_asesor"];
$image = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace( " ", "", $image );
$destino = "asesores/".$nombre_foto;
$comparador_fotos = "asesores/";
$cargo = $_REQUEST["cargo"];
$descrip = $_REQUEST ["descrip"];

// No actualizar ni archivos ni imagenes
if ( $destino == $comparador_fotos ) {
    $con1 = Conect();
    $qry1 = "SELECT * FROM asesores where id ='$id'";
    $result = $con1->prepare( $qry1 );
    $result->execute();
    $res = $result->fetch( PDO::FETCH_OBJ );

    $destino = $res->imagen;
    $con = Conect();
    $qry = ( "update asesores set nombre='$nom_asesor', telefono='$cel_asesor', correo='$cor_asesor', cargo='$cargo' , descripcion='$descrip' where id='$id '" );
    $result = $con->prepare( $qry );
    $result->execute();
    
    if ( !$result ) {
    } else {
        header( "Location: lista_asesores.php" );
    }

    // actualizar fotos pero no texto
}

if ( $destino != $comparador_fotos ) {
    copy( $ruta, $destino );
    $con = Conect();
    $qry = ( "update asesores set  imagen='$destino' where id='$id '" );
    $result = $con->prepare( $qry );
    $result->execute();

    if ( !$result ) {
        echo 'No se logro actualizar';
    } else {
        header( "Location: lista_asesores.php" );
    }
}

/*
$ruta = $_FILES["imagena"]["tmp_name"];
$nombre_foto = str_replace( " ", "", $foto );
$destino = "fotos/".$nombre_foto;

$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace( " ", "", $foto );
$destino = "fotos/".$nombre_foto;
$comparador_fotos = "fotos/";

$nombre_ar = $_FILES['archivo']['name'];
$limite_kb = 850;
$tipo = $_FILES['archivo']['type'];
$tamanio = $_FILES['archivo']['size'];
$rutas = $_FILES['archivo']['tmp_name'];
$nombre_archivo = str_replace( " ", "-", $nombre_ar );
$destinos = "archivos/".$nombre_archivo;
$comparador_archivo = "archivos/";
if ( $tamanio <= $limite_kb * 1024 ) {
    $nombre_archivo = str_replace( " ", "", $nombre_ar );
    $destinos = "archivo/".$nombre_archivo;

} else {
    echo "Archivo demaciado Grande";

}
// No actualizar ni archivos ni noticias
if ( $destino == $comparador_fotos && $destinos == $comparador_archivo ) {
    $con1 = Conect();
    $qry1 = "SELECT * FROM noticias where id ='$id'";
    $sql1 = mysqli_query( $con1, $qry1 );
    $res =  mysqli_fetch_array( $sql1 ) ;

    $destino = $res[3];
    $con = Conect();
    $qry = ( "update noticias set nombre='$nombre', descripcion='$descripcion', noticia='$noticia' where id='$id'" );
    $sql = mysqli_query( $con, $qry );
    if ( !$sql ) {
        echo 'No se logro actualizar';
    } else {
        header( "Location: lista-publicaciones.php" );
    }
    // actualizar fotos pero no archivo
}
if ( $destino != $comparador_fotos && $destinos == $comparador_archivo ) {
    copy( $ruta, $destino );
    $con = Conect();
    $qry = ( "update noticias set nombre='$nombre', descripcion='$descripcion', imagen='$destino',noticia='$noticia' where id='$id '" );
    $sql = mysqli_query( $con, $qry );

    if ( !$sql ) {
        echo 'No se logro actualizar';
    } else {
        header( "Location: lista-publicaciones.php" );
    }
}
// actualizar archivo pero no imagen
if ( $destino == $comparador_fotos && $destinos != $comparador_archivo ) {
    copy( $rutas, $destinos );
    $con = Conect();
    $qry = ( "update noticias set nombre='$nombre', descripcion='$descripcion', archivo='$destinos',noticia='$noticia' where id='$id '" );
    $sql = mysqli_query( $con, $qry );

    if ( !$sql ) {
        echo 'No se logro actualizar';
    } else {
        header( "Location: lista-publicaciones.php" );
    }
}
// actualizar  ambas cosas
if ( $destino == $comparador_fotos && $destinos != $comparador_archivo ) {
    copy( $rutas, $destinos );
    copy( $ruta, $destino );
    $con = Conect();
    $qry = ( "update noticias set nombre='$nombre', descripcion='$descripcion', imagen='$destino, archivo='$destinos',noticia='$noticia' where id='$id '" );
    $sql = mysqli_query( $con, $qry );

    if ( !$sql ) {
        echo 'No se logro actualizar';
    } else {
        header( "Location: lista-publicaciones.php" );
    }
}
*/
?>