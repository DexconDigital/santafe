<!-- Codigo del preloader -->
 <style>
    #wrap-preload {
        position: fixed;
        z-index: 10;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        opacity: 1;
        visibility: visible;
        transition: opacity .5s ease, visibility .5s ease;
        z-index: 1032;
    }

    #wrap-preload.close {
        opacity: 0;
        visibility: hidden;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    #wrap-preload>img.gif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        z-index: 1032;
        height: 15%;
    }
</style>
<div id="wrap-preload">
    <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
</div>
<script>
    var loader = document.getElementById("wrap-preload");
    window.addEventListener("load", function() {
        loader.style.visibility = "hidden";
    });
</script>
<!-- Fin de codigo preloader -->






<section class="col-12 p-0 sticky-top position-fixed">

    <!-- HEADER-INFORMACION-CONTACTO -->
    <div id="informacion_contacto" class="border-bottom py-2">
        <div class="container d-flex align-items-center justify-content-end">

            <div>
                <a target="_blank" class="d-flex align-items-center" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                    <i style="font-size: 20px" class="mr-2 <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i>
                    <p class="mr-3 d-none d-lg-block d-xl-block"><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></p>
                </a>
            </div>

            <div>
                <a target="_blank" class="d-flex align-items-center" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>">
                    <i style="font-size: 20px" class="mr-2 <?php echo $datos_contacto['correo']['icono'] ?>"></i>
                    <p class="mr-3 d-none d-lg-block d-xl-block"><?php echo $datos_contacto['correo']['correo'] ?></p>
                </a>
            </div>

            <div>
                <a target="_blank" class="d-flex align-items-center" target="blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>">
                    <i style="font-size: 20px" class="mr-2 <?php echo $datos_contacto['whatsapp']['icono'] ?>"></i>
                    <p class="mr-3 d-none d-lg-block d-xl-block"><?php echo $datos_contacto['whatsapp']['imprimir'] ?></p>
                </a>
            </div>

            <div>
                <a target="_blank" href="<?php echo $redes_sociales['facebook']['link'] ?>">
                    <i class="mr-2 redes <?php echo $redes_sociales['facebook']['icono'] ?>"></i>
                </a>
            </div>

            <div>
                <a target="_blank" href="<?php echo $redes_sociales['twitter']['link'] ?>">
                    <i class="mr-2 redes <?php echo $redes_sociales['twitter']['icono'] ?>"></i>
                </a>
            </div>

            <div>
                <a target="_blank" href="<?php echo $redes_sociales['instagram']['link'] ?>">
                    <i class="mr-2 redes <?php echo $redes_sociales['instagram']['icono'] ?>"></i>
                </a>
            </div>

            <div>
                <a target="_blank" href="<?php echo $redes_sociales['youtube']['link'] ?>">
                    <i class="mr-2 redes <?php echo $redes_sociales['youtube']['icono'] ?>"></i>
                </a>
            </div>

        </div>
    </div>
    <!-- HEADER-INFORMACION-CONTACTO -->


    <!-- HEADER-MENU -->
    <div id="menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0 py-2">

                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>

                <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">

                        <li class="nav-item m-auto">
                            <a class="nav-link <?php if ($page == 'Inicio') {
                                                    echo 'active2';
                                                } ?>" href="index.php"> Inicio </a>
                        </li>

                        <li class="nav-item m-auto">
                            <a class="nav-link <?php if ($page == 'Quiénes Somos') {
                                                    echo 'active2';
                                                } ?>" href="quienes_somos.php"> Quiénes Somos </a>
                        </li>

                        <li class="nav-item m-auto">
                            <a class="nav-link <?php if ($page == 'Servicios') {
                                                    echo 'active2';
                                                } ?>" href="servicios.php"> Servicios </a>
                        </li>

                        <li class="nav-item m-auto">
                            <a class="nav-link <?php if ($page == 'Inmuebles') {
                                                    echo 'active2';
                                                } ?>" href="inmuebles.php?"> Inmuebles </a>
                        </li>

                        <li class="nav-item m-auto dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Clientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a target="_blank" class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=180&tipo=2"> Arrendatarios </a>
                                <a target="_blank" class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=180&tipo=1"> Propietarios </a>
                                <a target="_blank" class="dropdown-item" href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments"> Pagos en línea </a>
                                <a target="_blank" data-toggle="modal" data-target="#descargar_formularios" class="dropdown-item"> Descarga de Formularios </a>
                            </div>
                        </li>

                        <li class="nav-item m-auto">
                            <a class="nav-link <?php if ($page == 'Blog') {
                                                    echo 'active2';
                                                } ?>" href="blog.php"> Blog </a>
                        </li>

                        <li class="nav-item m-auto">
                            <a class="nav-link <?php if ($page == 'Contáctanos') {
                                                    echo 'active2';
                                                } ?>" href="contactanos.php"> Contáctanos </a>
                        </li>

                        <li class="nav-item m-auto">
                            <a style="cursor: pointer" data-toggle="modal" data-target="#descargar_formularios" class="nav-link"> Descarga de Formularios </a>
                        </li>

                        <!-- <li class="nav-item m-auto">
                            <a target="_blank" href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments" class="nav-link"> <img class="botonpse" src="images/mpa.png" alt=""> </a>
                        </li> -->

                    </ul>
                </div>

            </nav>
        </div>

    </div>
    <!-- HEADER-MENU -->

</section>