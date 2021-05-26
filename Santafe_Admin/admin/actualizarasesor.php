<?php $page = "Lista de Asesores";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
$id = (isset($_GET["id"])) ? $_GET["id"] : 0;
$con = Conect();
$qry = "SELECT * FROM asesores where id ='$id' and id_inmobiliaria = 14";
$result = $con->prepare( $qry );
$result->execute();
$res = $result->fetch( PDO::FETCH_OBJ );
?>
<style>
    .contenedor_color {
        background-color: white;
    }

    .conct_botton {
        text-align: center;

    }

    .botonarchivo {
        margin-left: 25.66667%;
    }

    input[type]:focus {
        border-color:#005FD1
         !important;
        box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px #005FD1
         !important;
        outline: 0 none;
    }
    .color_botton{
        background-color: #FF212D ;
        color: white;
    }
    .color_botton:hover{
        color: white;
    }
    .boton_imagen {
        margin-left: 40%;
        margin-top: 5%;
    }
    
</style>
<?php
if ( $res ) { ?>
<div class="container contenedor_color">
    <div class="row justify-content-center">
        <div class="col-9" style=" margin-top: 27px;">
            <h2 class="text-center mb-3">Actualizar asesor</h2>
            <form method="post" action="update_asesor.php" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?php echo $res->id; ?>">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Nombre y Apellido</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nom_asesor" id="nom_asesor" value="<?php echo $res->nombre; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Celular</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cel_asesor" id="cel_asesor" value="<?php echo $res->telefono; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Correo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cor_asesor" id="cor_asesor" value="<?php echo $res->correo; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Cargo:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cargo" id="cargo" value="<?php echo $res->cargo; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Imagen Actual</label>
                    <div class="col-sm-9">
                        <img src="<?php echo $res->imagen; ?>" alt="" width="200px" height="auto">
                    </div>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file boton_imagen" name="imagen" id="imagen" accept="image/*">
                    </div>
                </div>
                <input type="hidden" id="fecha" name="fecha">
                <div class="form-group row">
                    <div class="col-8 offset-2 conct_botton mt-4">
                        <button class="btn btn-danger">Actualizar Asesor</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
} else {
    echo "<h1> No se encontró ningún registro</h1>";
}
include 'layout/layoutFooter.php';?>