<?php require 'variables/variables.php';
require 'controllers/detalleInmuebleController.php';
$page = "Detalle de Inmueble" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/carousel.tamanos.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <?php include 'layout/1archivos_header.php' ?>
    <!-- Datos para compartir por facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <!-- fin de datos para compartir por facebook -->

    <style>
        #map {
            height: 300px;
            z-index: 20;
        }

        .leaflet-control {
            z-index: 200;
        }

        .leaflet-control {
            z-index: 20;
        }
    </style>
    <link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
    </span>


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

        <div style="overflow:hiddden;" class="imagen position-absolute">
            <img src="images/banner_detalle_inmueble.jpg" alt="">
        </div>

        <div class="fondo_negro position-absolute">
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center contenido position-absolute blanco">
            <h1 class="text-center"> Detalle de Inmueble </h1>
            <p class="text-center"> <a class="a_banner" href="index.php">Inicio</a> | <a href="inmuebles.php">Inmuebles</a> | Detalle de Inmueble </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- CONTENIDO PRINCIPAL -->



    <section id="carrusel_y_miniaturas">
        <div class="container d-flex flex-wrap">


            <!-- SECCION IZQUIERDA -->

            <!-- CARRUSEL IMAGENES -->
            <div class="col-12 col-lg-7 col-xl-7">
                <!-- IMAGENES -->
                <section class="mt-3" id="slide-detalle">
                    <?php
                    if (isset($r['fotos'])) {
                        for ($i = 0; $i < count($r['fotos']); $i++) {
                            echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                        }
                    } else {
                        echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                    }
                    ?>
                </section>
                <!-- IMAGENES -->


                <!-- MINIATURAS -->
                <section class="vertical-center-4 slider" id="miniaturas">
                    <?php
                    if (isset($r['fotos'])) {
                        for ($i = 0; $i < count($r['fotos']); $i++) {
                            echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                        }
                    } else {
                        echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                    }
                    ?>
                </section>
                <!-- MINIATURAS -->

                <!-- CONTENIDO DE INMUEBLE -->

                <div class="d-blockp">
                    <div class="my-5">
                        <h4 class="text-center mb-3"> Descripción </h4>
                        <p style="text-align: justify;"><?php echo $descripcion ?></p>
                    </div>
                    <div class="my-5">
                        <?php
                        if (count($r['caracteristicasExternas']) > 0) {
                            echo
                                '<div class="col-md-12" style="margin-bottom: 12px;">
                                        <h4 class="property-single-detail-title"><strong>Características Externas</strong></h4>
                                            <ul>';
                            for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                        </div>
                                    ';
                        }
                        ?>
                    </div>

                    <div class="my-5">
                        <?php
                        if (count($r['caracteristicasAlrededores']) > 0) {
                            echo
                                '<div class="col-md-12" style="margin-bottom: 12px;">
                                        <h4 class="property-single-detail-title"><strong>Características de los alrededores</strong></h4>
                                            <ul>';
                            for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                echo '<li>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                    </div>
                                ';
                        }
                        ?>
                    </div>


                    <?php if ($r['video'] != "") {
                        echo
                            '<div class="video my-5">
                                     <h4 class="property-single-detail-title">Video</h4>
                                        <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Video</h5>
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                            <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                </div>
                                    ';
                    } ?>


                    <!-- MAPA -->
                    <div class="col-md-12 mb-3">
                        <h4 class="property-single-detail-title mb-3"><strong>Mapa de Ubicación</strong></h4>
                        <div class="card mapa_tamaño">
                            <div class="">
                                <div id="map" class="w-100"></div>
                            </div>
                        </div>
                    </div>
                    <!-- MAPA -->


                </div>
                <!-- CONTENIDO DE INMUEBLE -->


            </div>
            <!-- CARRUSEL IMAGENES -->

            <!-- SECCION IZQUIERDA -->





            <!-- SECCION DERECHA -->

            <!-- CARACTERISTICAS DEL INMUEBLE -->
            <div class="d-block col-12 col-lg-5 col-xl-5 caracteristicas_inmueble">

                <div class="d-flex mt-3 justify-content-center">
                    <p class="blanco mr-3 bg_azul rounded p-2"> <?php echo $r['Tipo_Inmueble']; ?> </p>
                    <p class="blanco mr-3 bg_rojo rounded p-2"> <?php echo $r['Gestion']; ?> </p>
                </div>

                <p class="text-muted text-center mt-2"> Código: <?php echo $co; ?> </p>

                <p class="font-weight-bold"> Precio: <span class="azul"></span> <?php if ($r['Gestion'] == 'Arriendo') {
                                                                                    echo '<span class="precio">$ ' . $r['ValorCanon'] . '</span>';
                                                                                } else if ($r['Gestion'] == 'Venta') {
                                                                                    echo '<span class="precio">$ ' . $r['ValorVenta'] . '</span>';
                                                                                } else {
                                                                                    echo '<span class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</span>';
                                                                                }
                                                                                ?> </p>

                <div class="d-flex align-items-center mt-2">
                    <i class="azul mr-2 fas fa-map-marker-alt"></i>
                    <p><?php echo  $r['barrio'] . ' en '  . $r['ciudad'] ?> </p>
                </div>

                <!-- BAÑOS ALCOBAS GARAJES ETC -->
                <div class="d-flex justify-content-between mt-2 flex-wrap">

                    <div class="d-flex align-items-center col-12 col-lg-6 col-xl-6 p-0">
                        <i class="azul mr-2 fas fa-chart-area"></i>
                        <p class="mr-2"> Superficie: </p>
                        <p><?php echo $area_construida ?>mts<sup>2</sup> </p>
                    </div>

                    <div class="d-flex align-items-center col-12 col-lg-6 col-xl-6 p-0">
                        <i class="azul mr-2 fas fa-bath"></i>
                        <p class="mr-2"> Baños: </p>
                        <p> <?php echo $banios ?> </p>
                    </div>

                    <div class="d-flex align-items-center col-12 col-lg-6 col-xl-6 p-0 mt-2">
                        <i class="azul mr-2 fas fa-bed"></i>
                        <p class="mr-2"> Alcobas: </p>
                        <p> <?php echo  $alcobas ?> </p>
                    </div>

                    <div class="d-flex align-items-center col-12 col-lg-6 col-xl-6 p-0 mt-2">
                        <i class="azul mr-2 fas fa-warehouse"></i>
                        <p class="mr-2"> Garajes: </p>
                        <p> <?php echo $garaje ?> </p>
                    </div>

                    <div class="d-flex align-items-center col-12 col-lg-6 col-xl-6 p-0 mt-2">
                        <i class="azul mr-2 fas fa-chart-area"></i>
                        <p class="mr-2"> Área <br />Privada: </p>
                        <p> <?php echo $area_privada ?>mts<sup>2</sup> </p>
                    </div>

                    <div class="d-flex align-items-center col-12 col-lg-6 col-xl-6 p-0 mt-2">
                        <i class="azul mr-2 fas fa-chart-line"></i>
                        <p class="mr-2"> Estrato: </p>
                        <p> <?php echo $estrato ?> </p>
                    </div>

                    <div class="d-flex align-items-center col-12 col-lg-6 col-xl-6 p-0 mt-2">
                        <i class="azul mr-2 fas fa-home"></i>
                        <p class="mr-2"> Edad Inmueble: </p>
                        <p> <?php echo $edad_inmueble ?> años</p>
                    </div>

                    <div class="d-flex align-items-center col-6 p-0 mt-2">
                        <i class="azul mr-2 fas fa-user-tie"></i>
                        <p class="mr-2"> Administración: $ <?php echo $administracion  ?></p>

                    </div>
                    
                </div>
                <!-- BAÑOS ALCOBAS GARAJES ETC -->

                <!-- COMPARTIR POR REDES -->
                <div id="iconos_redes" class="d-flex mt-4 align-items-center">
                    <p class="mr-2"> Comparte en: </p>
                    <a target="blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.inmobiliariasantafedc.com%2Fdetalle_inmueble.php%3Fco%3D180-<?php echo $co; ?>" target="_blank"><i style="font-size:20px;" class="mx-1 fab fa-facebook-f"></i></a>
                    <a target="blank" href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.inmobiliariasantafedc.com%2Fdetalle_inmueble.php%3Fco%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><i style="font-size:20px;" class="mx-1 fab fa-twitter"></i></a>
                    <a target="blank" href="<?php echo 'https://wa.me/?text=%20https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" target="_blank"><i style="font-size:20px;" class="mx-1 fab fa-whatsapp"></i></a>
                </div>
                <!-- COMPARTIR POR REDES -->

                <!-- BOTON IMPRIMIR FICHA -->
                <div class="col-12 mt-5">
                    <a type="button" class="col-12 btn boton color_blanco_url" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=180-<?php echo $co ?>" target="_blank">Imprimir ficha del Inmueble</a>
                </div>
                <!-- BOTON IMPRIMIR FICHA -->

                <!-- BOTON FOTO360 -->
                <?php if ($foto360 != "") {
                    echo '<div id="foto360" class="col-12 mt-2">
                         <a type="button" class="col-12 btn boton color_blanco_url" href="' . $foto360 . '" target="_blank"> Ver Foto 360 </a>
                           </div>';
                } else {
                    echo ' ';
                }
                ?>
                <!-- BOTON FOTO360 -->



                <!-- CONTACTO CON EL ASESOR -->
                <div class="mt-5" id="asesor">

                    <div class="imagen d-flex justify-content-center">
                        <img class="rounded" src="<?php echo $asesor['FotoAsesor']; ?>" alt="">
                    </div>

                    <div class="mb-2 align-items-center d-flex mt-3">
                        <i class="azul fas fa-user mr-2"></i>
                        <p> <?php echo $asesor['ntercero']; ?> </p>
                    </div>

                    <div class="mb-2 align-items-center d-flex">
                        <i class="azul fas fa-mobile-alt mr-2"></i>
                        <a href="tel:+57<?php echo $asesor['celular']; ?>">
                            <p> <?php echo $asesor['celular']; ?> </p>
                        </a>
                    </div>

                    <div class="mb-2 align-items-center d-flex">

                        <i class="azul fas fa-envelope mr-2"></i>
                        <a href="mailto:<?php echo $asesor['correo']; ?>">
                            <p> <?php echo $asesor['correo']; ?> </p>
                        </a>
                    </div>

                </div>
                <!-- CONTACTO CON EL ASESOR -->

                <!-- FORMULARIO DE CONTACTO-->
                <div class="col-12 mb-3 p-0">
                    <form action="email/correoAsesor.php" method="Post">
                        <input type="text" class="my-2 border codigo_input form-control" name="nombre" placeholder="Nombre y Apellido" required>
                        <input type="email" class="my-2 border codigo_input form-control" name="correo" placeholder="Correo Electrónico" required>
                        <input type="number" class="my-2 border codigo_input form-control" name="telefono" placeholder="Teléfono ó Celular" required>
                        <textarea class="form-control" name="mensaje" placeholder="Mensaje" rows="3" required></textarea>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="politica form-check-label" for="exampleCheck1"> Confimo que he leído, entendido y acepto la <a class="a_politica" target="_blank" href="archivos/politica_tratamiendo_datos.pdf" download="Politica de protección de datos">política de tratamiento de datos personales.</a> </label>
                        </div>
                        <select name="codigo" class="invisible display:none">
                            <option value=" <?php echo $co; ?>"> <?php echo $co; ?></option>
                        </select>
                        <select name="correo_asesor" class="invisible display:none">
                            <option value=" <?php echo $asesor['correo']; ?>"> <?php echo $asesor['correo']; ?></option>
                        </select>
                        <select name="nom_asesor" class="invisible display:none">
                            <option value=" <?php echo $asesor['ntercero']; ?>"> <?php echo $asesor['ntercero']; ?></option>
                        </select>
                        <div class="row justify-content-center">
                            <button class="col-3 btn boton" type="submit"> Enviar </button>
                        </div>
                    </form>
                </div>
                <!-- FORMULARIO DE CONTACTO-->

                <!-- PROPIEDADES DESTACADAS -->
                <section id="propiedades_destacadas" class="mt-5">

                    <div class="">


                        <div class="d-flex align-items-center justify-content-center">
                            <h2 class="text-center mb-4 linea position-relative"> Propiedades similares </h2>
                        </div>




                        <!-- CARDS -->
                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>
                        </div>
                        <!-- CARDS -->

                    </div>
                </section>
                <!-- PROPIEDADES DESTACADAS -->





            </div>
            <!-- CARACTERISTICAS DEL INMUEBLE -->

            <!-- SECCION DERECHA -->

        </div>
    </section>
    <!-- CARRUSEL Y ESTADISTICAS -->



    <!-- FOOTER -->
    <footer class="mt-5">
        <?php include 'layout/4footer.php' ?>
    </footer>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>

    <script src="js/slick.min.js"></script>

    <!-- Carrusel -->
    <script>
        $('#slide-detalle').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#miniaturas'
        });
        $('#miniaturas').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#slide-detalle',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- Carrusel -->

    <!-- mapa del inmueble -->
    <script src="mapas/leaflet.js" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);

        L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
            .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
            .openPopup();
    </script>

    <script>
        document

        if ($foto360) {

        }
        foto360
    </script>

</body>

</html>