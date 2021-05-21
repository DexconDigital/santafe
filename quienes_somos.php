<?php require 'variables/variables.php';
//require 'controllers/asesor_detalle.php';
$page = "Quiénes Somos" ?>
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
            <img src="images/banner_quienes_somos.jpg" alt="">
        </div>

        <div class="fondo_negro position-absolute">
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center contenido position-absolute blanco">
            <h1> Quiénes Somos </h1>
            <p> <a class="a_banner" href="index.php">Inicio</a> | Quiénes Somos </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- TEXTOS NOSOTROS -->
    <section id="textos_nosotros" class="container  mt-5">

        <div class="d-flex flex-wrap align-items-start justify-content-center">

            <!-- IMAGEN -->
            <div class="d-flex align-items-center imagen rounded w-100 h-100 col-12 col-md-6 col-lg-6 col-xl-6 justify-content-center">
                <img class="w-100 h-100 rounded" src="images/empresa.jpg" alt="">
            </div>
            <!-- IMAGEN -->

            <!-- TEXTO NOSOTROS Y VALORES -->
            <div class="mt-3 mt-md-0 mt-lg-0 mt-xl-0 col-12 col-md-6 col-lg-6 col-xl-6 w-100 h-100 d-flex align-items-center">
                <p class="text-justify"> <?php echo $texto_quienes_somos['nosotros']['parrafo'] ?> </p>

                <!-- <div class="col-12 p-0 mt-5">
                    <h2 class="text-center azul"> <?php echo $texto_quienes_somos['valores']['titulo'] ?> </h2>
                    <p> <?php echo $texto_quienes_somos['valores']['parrafo'] ?> </p>
                </div> -->

            </div>
            <!-- TEXTO NOSOTROS Y VALORES -->

            <!-- MISION Y VISION -->
            <!-- <div class="d-flex mt-5">

                <-- MISION --
                <div class="col-6">
                    <h2 class="text-center azul"> <?php echo $texto_quienes_somos['mision']['titulo'] ?> </h2>
                    <p> <?php echo $texto_quienes_somos['mision']['parrafo'] ?> </p>
                </div>
                <-- MISION --

                <-- VISION --
                <div class="col-6">
                    <h2 class="text-center azul"> <?php echo $texto_quienes_somos['vision']['titulo'] ?> </h2>
                    <p> <?php echo $texto_quienes_somos['vision']['parrafo'] ?> </p>

                </div>
                <-- VISION --
            </div> -->
            <!-- MISION Y VISION -->

        </div>

    </section>
    <!-- TEXTOS NOSOTROS -->


    <!-- NUESTROS ASESORES -->
    <section id="asesores">

        <div class="container">

            <div class="overflow-hidden container-fluid d-flex align-items-center justify-content-center my-5">
                <h2 style="font-size:23px" class="linea position-relative"> Conoce Nuestros Asesores </h2>
            </div>



            <div class="col-12 d-flex justify-content-center flex-wrap">
                <?php if (isset($asesor_array)) {
                    modelo_asesor($asesor_array);
                } else {
                    echo '<div class="col-12 d-flex justify-content-center">
                        <h3 class="text-center">No hay asesores para mostrar<h3>
                        </div>';
                }
                ?>
            </div>



        </div>






        </div>

    </section>
    <!-- NUESTROS ASESORES -->

    <!-- FOOTER -->
    <footer class="mt-5">
        <?php include 'layout/4footer.php' ?>
    </footer>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>

</body>

</html>