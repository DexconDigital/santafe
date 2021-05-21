<?php

require_once( "conexion.php" );

$con = Conect();
$array = array();

$sql = "SELECT * FROM asesores  where id_inmobiliaria = 14 order by id desc";
$result = $con->prepare( $sql );
$result->execute();

$resultado = $result->fetchAll( PDO::FETCH_OBJ );

foreach ( $resultado as $key => $field ) {
    $id = $field->id;
    $nombre = $field->nombre;
    $telefono = $field->telefono;
    $imagen = $field->imagen;
    $correo = $field->correo;
    $cargo = $field->cargo;
    $fecha = $field->fecha;

    $asesor_array[] = array(
        'nombre' => $nombre,
        'id' => $id,
        'telefono' => $telefono,
        'correo' => $correo,
        'imagen' => $imagen,
        'fecha' => $fecha,
        'cargo' => $cargo,
    );
}

function modelo_asesor( $r ) {
    for ( $i = 0; $i < count( $r );
    $i++ ) {
        $ruta_imagen = "./Santafe_Admin/admin/" . $r[$i]['imagen'];
        echo '<div class="card2 mx-auto col-12 col-md-6 col-lg-4 mb-4 border">
                <div class="imagen">
                    <img src="' . $ruta_imagen . '" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                <h5 class="text-center color_nombre_asesor mb-3">' . $r[$i]['nombre'] . '</h5>
                <div class="col-12" >
                    <ul class="list-info-asesor justify-content-around p-0 mb-5 ">
                       <li class="toolti">
                            <span class="tooltiptext">' . $r[$i]['cargo'] . '</span>
                            <a class="" href="' . $r[$i]['cargo'] . '" >
                              <i class="far fa-user asesoricon"></i>
                            </a>
                       </li>

                       <li class="toolti">
                       <span class="tooltiptext">' . $r[$i]['correo']. '</span>
                          <a class="" href="mailto:' . $r[$i]['correo'] . '" >
                              <i class="far fa-envelope asesoricon"></i>
                          </a>
                       </li>

                       <li class="toolti">
                       <span class="tooltiptext">' .  $r[$i]['telefono']. '</span>
                          <a class="" href="tel:' . $r[$i]['telefono'] . '">
                              <i class="fas fa-mobile-alt asesoricon"></i>
                          </a>
                       </li>
                    </ul>
                </div>
            </div>
                <br>
        </div>';
    }
}
