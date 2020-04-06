<i class="fas fa-angle-double-up rounded subir"></i>

<div class="container">

    <section class="contenido d-flex align-items-start flex-wrap justify-content-center blanco">

        <!-- DATOS DE CONTACTO -->
        <div class="order-1 order-md-1 order-lg-1 order-xl-1 col-12 col-md-6 col-lg-4 col-xl-4">

            <h4 class="text-center my-3"> Datos de Contacto </h4>

            <div>
                <a class="blanco align-items-center d-flex" href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>">
                    <i class="mr-2 <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"></i>
                    <p><?php echo $datos_contacto['telefono_fijo']['imprimir'] ?></p>
                </a>
            </div>

            <div>
                <a class="blanco align-items-center d-flex" href="tel:<?php echo $datos_contacto['celular']['link'] ?>">
                    <i class="mr-2 <?php echo $datos_contacto['celular']['icono'] ?>"></i>
                    <p><?php echo $datos_contacto['celular']['imprimir'] ?></p>
                </a>
            </div>

            <div>
                <a class="blanco align-items-center d-flex" href="<?php echo $datos_contacto['whatsapp']['link'] ?>">
                    <i class="mr-2 <?php echo $datos_contacto['whatsapp']['icono'] ?>"></i>
                    <p><?php echo $datos_contacto['whatsapp']['imprimir'] ?></p>
                </a>
            </div>

            <div>
                <a class="blanco align-items-center d-flex" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>">
                    <i class="mr-2 <?php echo $datos_contacto['correo']['icono'] ?>"></i>
                    <p class="text-break correo_movil"><?php echo $datos_contacto['correo']['correo'] ?></p>
                </a>
            </div>



        </div>
        <!-- DATOS DE CONTACTO -->

        <!-- MAPA -->
        <div class="order-3 order-md-2 order-lg-2 order-xl-2 col-12 col-md-12 col-lg-4 col-xl-4 mt-5 mapa d-flex align-items-center flex-column justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.7915251547765!2d-74.08139118590994!3d4.63124864354704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bd4908aa381%3A0x8be02f4be67034a2!2sCra.%2029%20%2340a-57%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1579530430343!5m2!1ses-419!2sco" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <a target="blank" href="https://www.google.com/maps/dir//Cra.+29+%2340a-57,+Bogot%C3%A1/@4.6312486,-74.0813912,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8e3f9bd4908aa381:0x8be02f4be67034a2!2m2!1d-74.0792025!2d4.6312433?hl=es-CL"><button class="btn boton_footer mt-3"> Cómo Llegar </button></a>
        </div>
        <!-- MAPA -->

        <div class="order-1 order-md-1 order-lg-3 order-xl-3 col-12 col-md-6 col-lg-4 col-xl-4">

            <h4 class="text-center my-3"> Ubicación y Horario </h4>

            <div class="d-flex align-items-baseline">
                <i class="mr-2 <?php echo $datos_contacto['direccion']['icono'] ?>"></i>
                <p><?php echo $datos_contacto['direccion']['direccion'] ?></p>
            </div>

            <div class="d-flex align-items-baseline">
                <i class="mr-2 <?php echo $datos_contacto['horario']['icono'] ?>"></i>
                <p><?php echo $datos_contacto['horario']['horario'] ?></p>
            </div>

        </div>



    </section>

</div>

<section class="d-flex align-items-center justify-content-center copyright blanco mt-3">

    <p class="p-3"> Diseñado y Desarrollado por <a target="blank" href="https://www.dexcondigital.com"> Dexcon Digital</a> ©Copyright 2020 para Inmobiliaria Santa Fe DC. Todos los derechos reservados. </p>

</section>


<!-- Modal -->
<div class="modal fade" id="descargar_formularios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Descarga de formularios </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex flex-wrap align-items-center justify-content-center">

                <p class="mb-3 col-12"> Haz click para descargar: </p>


                <a target="_blank" class="afianza col-6 d-flex aling-items-center justify-content-center formularios_footer" href="https://www.afiansa.com/solicitudes_arrendamiento2/consultar_requisitos">
                    <img class="w-100 h-100" src="images/afiansa.png" alt="">
                </a>

                <a target="_blank" class="col-6 d-flex aling-items-center justify-content-center formularios_footer" href="https://www.protecsa.com.co/servicios/#solicitud">
                    <img class="w-100 h-100" src="images/protecsa.png" alt="">
                </a>


                <a target="_blank" class="col-8 d-flex aling-items-center justify-content-center formularios_footer2" href="http://www.ellibertador.co/wps/portal/el-libertador/home">
                    <img class="w-100 h-100" src="images/libertador.png" alt="">
                </a>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn boton" data-dismiss="modal"> Cerrar </button>
            </div>
        </div>
    </div>
</div>