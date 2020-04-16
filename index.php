<?php require 'variables/variables.php';
$page = "Inicio" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/1archivos_header.php' ?>
    <?php require 'controllers/indexController.php'; ?>
    <?php require 'controllers/noticiasController.php'; ?>

    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>

<body>

    <!-- HEADER -->
    <header>
        <?php include 'layout/3header.php' ?>
    </header>
    <!-- HEADER -->

    <!-- CARRUSEL DE IMAGENES -->
    <section id="carrusel" class="margen_top">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item h-100 w-100 active">

                    <div class="imagen h-100">
                        <img src="images/slider_1.jpg" class="d-block h-100 w-100" alt="...">
                    </div>

                    <div class="carousel-caption h-100 p-0 d-md-block">
                        <h2 class="texto_carrusel blanco d-flex align-items-center justify-content-center h-100">
                            Inmobiliaria Santa Fe DC
                        </h2>
                    </div>

                </div>

                <div class="carousel-item h-100 w-100">

                    <div class="imagen h-100">
                        <img src="images/slider_2.jpg" class="d-block h-100 w-100" alt="...">
                    </div>

                    <div class="carousel-caption h-100 p-0 d-md-block">
                        <h2 class="texto_carrusel blanco d-flex align-items-center justify-content-center h-100">
                            Permítenos guiarte y encuentra tu Inmueble Ideal
                        </h2>
                    </div>

                </div>

                <div class="carousel-item h-100 w-100">

                    <div class="imagen h-100">
                        <img src="images/slider_3.jpg" class="d-block h-100 w-100" alt="...">
                    </div>

                    <div class="carousel-caption h-100 p-0 d-md-block">
                        <h2 class="texto_carrusel blanco d-flex align-items-center justify-content-center h-100">
                            Nuestros agentes experimentados tienen el conocimiento y las habilidades para asesorarte.
                        </h2>
                    </div>

                </div>

            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section>
    <!-- CARRUSEL DE IMAGENES -->

    <!-- BUSCADOR -->
    <section id="formulario">

        <?php include 'layout/buscador.php' ?>

    </section>
    <!-- BUSCADOR -->

    <!-- PROPIEDADES DESTACADAS -->
    <section id="propiedades_destacadas" class="mt-5 mt-md-0 mt-lg-0 mt-xl-0">

        <div class="container">

            <div class="overflow-hidden container-fluid d-flex align-items-center justify-content-center my-5">
                <h2 class="linea position-relative d-inline-block"> Propiedades Destacadas </h2>
            </div>


            <!-- CARDS -->
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                <?php
                if (is_array($api)) {
                    inmuebles_destacados($api);
                } else {
                    echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
                }
                ?>
            </div>
            <!-- CARDS -->

        </div>
    </section>
    <!-- PROPIEDADES DESTACADAS -->

    <!-- QUIENES SOMOS -->
    <section id="quienes_somos" class="container mb-5">

        <div class="container">

            <div class="overflow-hidden container-fluid d-flex align-items-center justify-content-center my-5">
                <h2 class="linea position-relative"> Quiénes Somos </h2>
            </div>


            <p class="mb-5 text-justify text-lg-left text-xl-left"> <?php echo $texto_quienes_somos['nosotros']['parrafo'] ?> </p>
        </div>

        <!-- CARDS QUIENES SOMOS -->
        <div class="d-flex align-items-center justify-content-center flex-wrap">

            <!-- arrendamiento 1-->
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <a href="servicios.php#ancla1">
                    <div class="cards_servicios rounded py-4">

                        <div class="circulo_iconos d-flex align-items-center rounded-pill m-auto justify-content-center">
                            <i class="icono <?php echo $iconos_servicios['arrendamientos'] ?>"></i>
                        </div>

                        <h4 class="text-center mt-2"> <?php echo $texto_servicios['arrendamiento']['titulo'] ?> </h4>
                    </div>

                </a>

            </div>
            <!-- corretaje 2-->
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <a href="servicios.php#ancla2">
                    <div class="cards_servicios rounded py-4">

                        <div class="circulo_iconos d-flex align-items-center rounded-pill m-auto justify-content-center">
                            <i class="icono <?php echo $iconos_servicios['corretaje'] ?>"></i>
                        </div>

                        <h4 class="text-center mt-2"> <?php echo $texto_servicios['corretaje']['titulo'] ?> </h4>
                    </div>

                </a>

            </div>
            <!-- ventas 3-->
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <a href="servicios.php#ancla3">
                    <div class="cards_servicios rounded py-4">

                        <div class="circulo_iconos d-flex align-items-center rounded-pill m-auto justify-content-center">
                            <i class="icono <?php echo $iconos_servicios['ventas'] ?>"></i>
                        </div>

                        <h4 class="text-center mt-2"> <?php echo $texto_servicios['ventas']['titulo'] ?> </h4>
                    </div>

                </a>

            </div>
            <!-- avaluo 4-->
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3 mb-md-0 mb-lg-0 mb-xl-0">
                <a href="servicios.php#ancla4">
                    <div class="cards_servicios rounded py-4">

                        <div class="circulo_iconos d-flex align-items-center rounded-pill m-auto justify-content-center">
                            <i class="icono <?php echo $iconos_servicios['avaluos'] ?>"></i>
                        </div>

                        <h4 class="text-center mt-2"> <?php echo $texto_servicios['avaluos']['titulo'] ?> </h4>
                    </div>

                </a>

            </div>
            <!-- asistencia 5-->
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3 mb-md-0 mb-lg-0 mb-xl-0">
                <a href="servicios.php#ancla5">
                    <div class="cards_servicios rounded py-4">

                        <div class="circulo_iconos d-flex align-items-center rounded-pill m-auto justify-content-center">
                            <i class="icono <?php echo $iconos_servicios['asistencias_locativas'] ?>"></i>
                        </div>

                        <h4 style="font-size: 21px;" class="text-center mt-2"> <?php echo $texto_servicios['asistencias_locativas']['titulo'] ?> </h4>
                    </div>

                </a>

            </div>
            <!-- seguros 6-->
            <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3 mb-md-0 mb-lg-0 mb-xl-0">
                <a href="servicios.php#ancla6">
                    <div class="cards_servicios rounded py-4">

                        <div class="circulo_iconos d-flex align-items-center rounded-pill m-auto justify-content-center">
                            <i class="icono <?php echo $iconos_servicios['seguros'] ?>"></i>
                        </div>

                        <h4 class="text-center mt-2"> <?php echo $texto_servicios['seguros']['titulo'] ?> </h4>
                    </div>

                </a>

            </div>

        </div>
        <!-- CARDS QUIENES SOMOS -->


    </section>
    <!-- QUIENES SOMOS -->

    <!-- CONTADOR ESTADISTICAS  -->
    <section id="contador_estadisticas">

        <div class="imagen">
        </div>

        <div class="fondo_negro"></div>


        <h2 class="contenido_estadisticas w-100 h-100 d-flex text-center align-items-center justify-content-center"> ¡Tu Inmueble en manos profesionales! </h2>

        <!-- <div class="contenido_estadisticas container d-flex align-items-center justify-content-around" id="contador">

            <div class="col-3">
                <h4 class="text-center"> Total Inmuebles </h4>
                <p class="text-center" id="counter-propertys"></p>
            </div>

            <div class="col-3">
                <h4 class="text-center"> Total Arriendo </h4>
                <p class="text-center" id="counter-rent"></p>
            </div>

            <div class="col-3">
                <h4 class="text-center"> Total Venta </h4>
                <p class="text-center" id="counter-sale"></p>
            </div>

            <div class="col-3">
                <h4 class="text-center"> Total Arriendo/Venta </h4>
                <p class="text-center" id="counter-sale-rent"></p>
            </div>

        </div> -->

    </section>
    <!-- CONTADOR ESTADISTICAS  -->

    <!-- ALIADOS -->
    <section id="aliados" class="d-none d-md-block d-lg-block d-xl-block my-5 container">

        <div class="overflow-hidden container-fluid d-flex align-items-center justify-content-center my-5">
            <h2 class="linea position-relative"> Nuestros Aliados </h2>
        </div>

        <div id="ejemplo" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#ejemplo" data-slide-to="0" class="active"></li>
                <li data-target="#ejemplo" data-slide-to="1"></li>
                <li data-target="#ejemplo" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">


                    <div class="d-flex flex_tablet">
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/solidaria.png" alt=""></div>
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/caja_social.png" alt=""></div>
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/afiansa.png" alt=""></div>
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/libertador.png" alt=""></div>
                    </div>

                </div>

                <div class="carousel-item">

                    <div class="d-flex flex_tablet">
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/liberty.png" alt=""></div>
                        <div class="col-3"> <img class="d-block w-100 protecsa" src="images/protecsa.png" alt=""></div>
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/seguros_estado.png" alt=""></div>
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/simi.png" alt=""></div>
                    </div>

                </div>

                <div class="carousel-item">

                    <div class="d-flex flex_tablet align-items-center justify-content-center">
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/finca_raiz.png" alt=""></div>
                        <div class="col-3"> <img class="d-block w-100" src="images/metrocuadrado.png" alt=""></div>
                        <div class="col-3"> <img class="d-block w-100" src="images/ciencuadras.png" alt=""></div>

                    </div>

                </div>


            </div>
            <a class="carousel-control-prev" href="#ejemplo" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#ejemplo" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- ALIADOS -->

    <!-- ALIADOS (RESPONSIVE)  -->
    <section id="aliados" class="d-md-none d-lg-none d-xl-none mt-5 container">

        <div class="overflow-hidden container-fluid d-flex align-items-center justify-content-center my-5">
            <h2 class="linea position-relative"> Nuestros Aliados </h2>
        </div>

        <div class="col-12">

            <div class="owl-carousel owl-theme d-flex align-items-center justify-content-center" id="aliados_slide">

                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes contenedor_imagenes_main d-flex justify-content-center">
                    <img src="images/solidaria.png" alt="">
                </div>


                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/caja_social.png" alt="">
                </div>
                
                
                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/afiansa.png" alt="">
                </div>


                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/libertador.png" alt="">
                </div>


                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/liberty.png" alt="">
                </div>


                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/protecsa.png" alt="">
                </div>


                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/seguros_estado.png" alt="">
                </div>

                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/simi.png" alt="">
                </div>

                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/finca_raiz.png" alt="">
                </div>

                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/metrocuadrado.png" alt="">
                </div>

                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/ciencuadras.png" alt="">
                </div>
                

            </div>


        </div>

        <!-- <div class="col-12">

            <div class="owl-carousel owl-theme d-flex align-items-center justify-content-center" id="aliados_slide">

                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes contenedor_imagenes_main d-flex justify-content-center">
                    <img src="images/solidaria.png" alt="">
                </div>


                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/caja_social.png" alt="">
                </div>


                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/afiansa.png" alt="">
                </div>


                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/libertador.png" alt="">
                </div>


                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/liberty.png" alt="">
                </div>


                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/protecsa.png" alt="">
                </div>


                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/seguros_estado.png" alt="">
                </div>

                <div style="height:200px" class="align-items-center mx-2 contenedor_imagenes d-flex justify-content-center">
                    <img src="images/simi.png" alt="">
                </div>

            </div>


        </div> -->

    </section>
    <!-- ALIADOS (RESPONSIVE)  -->


    <!-- <section class="container">
        <div id="ejemplo" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#ejemplo" data-slide-to="0" class="active"></li>
                <li data-target="#ejemplo" data-slide-to="1"></li>
                <li data-target="#ejemplo" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">


                    <div class="d-flex">
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/solidaria.png" alt=""></div>
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/caja_social.png" alt=""></div>
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/afiansa.png" alt=""></div>
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/libertador.png" alt=""></div>
                    </div>

                </div>

                <div class="carousel-item">

                   <div class="d-flex">
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/liberty.png" alt=""></div>
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/protecsa.png" alt=""></div>
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/seguros_estado.png" alt=""></div>
                        <div class="col-3"> <img class="h-100 d-block w-100" src="images/simi.png" alt=""></div>
                   </div>

                </div>


            </div>
            <a class="carousel-control-prev" href="#ejemplo" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#ejemplo" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section> -->



    <!-- CONSIGNAR INMUEBLE -->
    <section id="consignar_inmueble" class="pt-4 mt-5">

        <div class="position-absolute imagen">
            <img src="images/imagen_descargar_inmueble.jpg" alt="">
        </div>

        <div class="position-absolute fondo_azul">
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center blanco contenido position-absolute">

            <h2 class="text-center"> <span style="font-family:Arial, Helvetica, sans-serif">¿</span>Deseas Consignar tu inmueble con nosotros<span style="font-family:Arial, Helvetica, sans-serif">?</span> </h2>

            <!-- Button trigger modal -->
            <button type="button" class="btn boton mt-2" data-toggle="modal" data-target="#exampleModal">
                Consignar inmueble
            </button>



        </div>


    </section>

    <!-- Modal -->
    <div class="modal fade negro" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Consigna tu inmueble </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="email/consignainmueble.php" class="row" method="post">

                        <div class="form-group col-12">
                            <input type="text" placeholder="Nombre del propietario" name="nombre" class="form-control" requiered>
                        </div>

                        <div class="form-group col-12">
                            <input type="email" placeholder="Correo electrónico (opcional)" name="correo" class="form-control">
                        </div>

                        <div class="form-group col-12">
                            <input type="number" placeholder="Número del propietario" name="telefono" class="form-control" requiered>
                        </div>

                        <div class="form-group col-12">
                            <input type="number" placeholder="Precio" name="precio" class="form-control" requiered>
                        </div>

                        <div class="form-group col-12">
                            <select class="form-control select_color" id="tipo_inm" name="tipo_inm" requiered>
                                <option selected="" disabled="">Tipo de Inmueble</option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Casa">Casa</option>
                                <option value="Consultorio">Consultorio</option>
                                <option value="Oficina">Oficina</option>
                                <option value="Local">Local</option>
                                <option value="Bodega">Bodega</option>
                                <option value="Lote">Lote</option>
                                <option value="Finca">Finca</option>
                                <option value="Parqueadero">Parqueadero</option>
                                <option value="Edificio">Edificio</option>
                                <option value="Apartaestudio">Apartaestudio</option>
                                <option value="Hotel">Hotel</option>
                            </select>
                        </div>

                        <div class="form-group col-12">
                            <select class="form-control select_color" name="transaccion" requiered>
                                <option selected="" disabled="">Tipo de Transacción</option>
                                <option value="arriendo">Arriendo</option>
                                <option value="venta">Venta</option>
                            </select>
                        </div>

                        <div class="form-group col-12">
                            <input type="text" placeholder="Ciudad" name="ciudad" class="form-control" requiered>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" placeholder="Dirección" name="direccion" class="form-control" requiered>
                        </div>

                        <div class="form-group col-12">
                            <input type="number" placeholder="Áréa del inmueble (mts²)" name="area" class="form-control" requiered>
                        </div>

                        <div class="form-group col-12">
                            <textarea name="mensaje" placeholder="Mensajes" class="form-control" id="mensaje" rows="6" requiered></textarea>
                        </div>
                        <div class="form-group col-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" requiered>
                                <label class="form-check-label" for="exampleCheck1">Acepto <a class="politicas_contacto" target="_blank" href="archivos/politica_tratamiendo_datos.pdf" download="Politica de protección de datos">la política y tratamiento de datos</a></label>
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn boton_cerrar" data-dismiss="modal"> Cerrar </button>
                    <button type="submit" class="btn boton">Enviar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- CONSIGNAR INMUEBLE -->

    <!-- ULTIMAS NOTICIAS -->
    <section id="ultimas_noticias">

        <div class="container">

            <div class="overflow-hidden container-fluid d-flex align-items-center justify-content-center mt-5">
                <h2 class="linea position-relative"> Últimas Noticias </h2>
            </div>

        </div>

        <div class="container d-flex flex-wrap justify-content-center">

            <?php if (isset($noticias_array)) {
                modelo_ultima_noticia($noticias_array);
            } else {
                echo '<div class="col 12">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
            }
            ?>


        </div>

    </section>
    <!-- ULTIMAS NOTICIAS -->


    <!-- FOOTER -->
    <footer class="mt-5">
        <?php include 'layout/4footer.php' ?>
    </footer>
    <!-- FOOTER -->



    <?php include 'layout/2archivos_footer.php' ?>
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>

    <!--  contador -->
    <!-- <script src="js/countUp.min.js"></script>
    <script src="js/counter-propertys.js"></script> -->


    <!-- Slider Aliados -->
    <script>
        $('#aliados_slide').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            pagination: false,
            autoplay: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>

</body>

</html>