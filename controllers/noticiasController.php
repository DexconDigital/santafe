<?php

require_once( "conexion.php" );

$con = Conect();
$array = array();

$sql = "SELECT * FROM noticias  where id_inmobiliaria2 = 14 order by id desc";
$result = $con->prepare( $sql );
$result->execute();

$resultado = $result->fetchAll( PDO::FETCH_OBJ );

foreach ( $resultado as $key => $field ) {
    $id = $field->id;
    $nombre = $field->nombre;
    $descripcion = $field->descripcion;
    $imagen = $field->imagen;
    $archivo = $field->archivo;
    $noticia = $field->noticia;
    $fecha = $field->fecha;
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => 'Santafe_Admin/admin/' . $imagen,
        'noticia' => $noticia,
        'fecha' => $fecha,
        'archivo' => $archivo,
    );
}

function modelo_ultima_noticia( $r ) {

    if ( count( $r ) > 2 ) {
        $cantidad_noticias = 3;
    } else {
        $cantidad_noticias = count( $r );
    }
    for ( $i = 0; $i<$cantidad_noticias; $i++ ) {
        $nombre = $r[$i]['titulo'];
        $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 124;
        $limite_de_cadena11 = 120;
        $limite_de_cadena2 = 16;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
        if ( strlen( $nombre ) >= $limite_de_cadena2 ) {
            $nombre = substr( $nombre, 0, $limite_de_cadena2 ) . '...';
        } else {
            $nombre = $nombre . '...';
        }
        if ( strlen( $descrip ) >= $limite_de_cadena1 ) {
            $descrip = substr( $descrip, 0, $limite_de_cadena1 ) . '...';
        } else {
            $descrip = $descrip . '...';
        }
        echo'
       <div class="col-12 col-md-6 col-lg-4 col-xl-4 mt-5">
       <a href="./detalle-noticia.php?co=' . $r[$i]['id'] . '">
           <div class="card">

               <div class="imagen position-relative">
                   <img src="'.$r[$i]['imagen'].'" class="card-img-top" alt="...">
                   <div class="blanco font-weight-bold animacion_ver_mas col-12 p-0 text-center">  Haz click para ver más </div>
               </div>

               <div class="card-body">

                   <h2>' .$nombre.'</h2>

                   <h6 class="mb-3 text-muted">' . $r[$i]['fecha'] .'</h6>

                   <p class="position-relative pt-3"> '.$descrip.' </p>

               </div>

           </div>
       </a>
   </div>

        ';
    }
}

function modelo_noticia( $r ) {
    for ( $i = 0; $i < count( $r );
    $i++ ) {
        $nombre = $r[$i]['titulo'];
        $descrip = $r[$i]['descripcion'];
        $limite_de_cadena1 = 124;
        $limite_de_cadena11 = 120;
        $limite_de_cadena2 = 16;
        // recortar cadena
        //pedniente recortar cadena de descripcion corta
        if ( strlen( $nombre ) >= $limite_de_cadena2 ) {
            $nombre = substr( $nombre, 0, $limite_de_cadena2 ) . '...';
        } else {
            $nombre = $nombre . '...';
        }
        if ( strlen( $descrip ) >= $limite_de_cadena1 ) {
            $descrip = substr( $descrip, 0, $limite_de_cadena1 ) . '...';
        } else {
            $descrip = $descrip . '...';
        }
        echo '
        <div class="col-12 col-md-6 col-lg-4 col-xl-4 mt-5">
             <a href="./detalle-noticia.php?co=' . $r[$i]['id'] . '">
            <div class="card">

                <div class="imagen position-relative">
                    <img src="'.$r[$i]['imagen'].'" class="card-img-top" alt="...">
                    <div class="blanco font-weight-bold animacion_ver_mas col-12 p-0 text-center">  Haz click para ver más </div>
                </div>

                <div class="card-body">

                    <h2>' .$nombre.'</h2>

                    <h6 class="mb-3 text-muted">' . $r[$i]['fecha'] .'</h6>

                    <p class="position-relative pt-3"> '.$descrip.' </p>

                </div>

            </div>
         </a>
        </div>
    
    ';
    }
}
