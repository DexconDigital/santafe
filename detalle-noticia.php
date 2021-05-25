<?php require 'variables/variables.php';
require_once('controllers/detalle_noticiasController.php');
$page = "Blog" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/1archivos_header.php' ?>

    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>

<body>

    <!-- HEADER -->
    <header>
        <?php include 'layout/3header.php' ?>
    </header>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="margen_top">

        <div class="imagen position-absolute">
            <img src="images/banner_contacto.jpg" alt="">
        </div>

        <div class="fondo_negro position-absolute">
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center contenido position-absolute blanco">
            <h1> Blog </h1>
            <p> <a class="a_banner" href="index.php">Inicio</a> | Blog </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- Contenido Blog -->
    <section class="my-5">
        <div class="container-fluid cont_noticias pb-5">
            <div class="container my-5">
                <div class="col-12 text-center mb-4">
                    <h2><?php echo $nombre ?></h2>
                </div>
                <div class="col-12">
                    <img id="cont_img_noticia" class="img-fluid-top mr-4 img_notica" style="float: left;" src="<?php echo $ruta_imagen ?>" alt="">
                    <p class="text-justify"> <?php echo $noticia ?></p>
                </div>
            </div>
            <div class="container col-10 text-center mb-4 mt-3 ">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-12">
                        <span class="text-muted"> Publicado el: <?php echo $fecha_complete; ?></span>
                    </div>
                    <div class="col-lg-6 col-md-5 col-12">
                        <?php if ($ruta_archivo != $comparador . "") {
                            echo '<a style="color:black;" href="' . $ruta_archivo . '" download="Noticias.pdf"><i style="color:red;" class="fas fa-file-pdf mr-3"></i>Descargar Archivo Adjunto</a>';
                        } ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Contenido Blog -->
    <!-- FOOTER -->
    <footer class="mt-5 contenedor_footer">
        <?php include 'layout/4footer.php' ?>
    </footer>
    <!-- FOOTER -->
    <?php include 'layout/2archivos_footer.php' ?>

</body>

</html>