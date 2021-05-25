<?php $page = "Agregar Acesor";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
?>
<style>
    .color_fondo {
        background-color: white;


    }

    .boton_centro {
        text-align: center;
    }

    textarea:focus,
    textarea[type]:focus,
    input:focus,
    input[type]:focus {
        border-color: #005FD1
         !important;
        box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px #005FD1
         !important;
        outline: 0 none;
    }

    .color_botton {
        background-color: #FF212D;
        color: white;
    }

    .color_botton:hover {
        color: white;
    }
</style>
<div class="container color_fondo">
    <div class="row justify-content-center">
        <div class="col-9" style="    margin-top: 27px;">
            <h2 style="margin-bottom: 35px;" class="text-center">Agregar Asesor</h2>
            <form method="POST" action="agregar_asesor.php" enctype="multipart/form-data">

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Nombre y apellido:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nom_asesor" id="nom_asesor" placeholder="Nombre y apellido" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Celular:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cel_asesor" id="cel_asesor" placeholder="Celular" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Correo:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cor_asesor" id="cor_asesor" placeholder="ejemplo@dominio.com" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Cargo:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Asesor comercial" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Descripción:</label>
                    <div class="col-sm-9" style="margin-left: 8%;">
                        <textarea name="descrip" id="descrip"></textarea>
                        <small id="tituloHepl" class="form-text text-muted"> Ingrese el Contenido de la publicación y si es un texto copiado no olvide borrar el formato </small> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Foto del asesor</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" name="imagen" id="imagen" accept="image/*">
                        <small id="tituloHepl" class="form-text text-muted"> Ingrese una imagen que no supere las 2MB</small> 
                    </div>
                </div>


                <input type="hidden" id="fecha" name="fecha">
                <div class="form-group row">
                    <div class="col-8 offset-2 mt-4 boton_centro">
                        <button class="btn color_botton" value="crear">Agregar Asesor</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/layoutFooter.php'; ?>