$(document).ready(function () {
    // si el campo codigo tiene un valor los demas  campos se desabilitan
    $('#codigo_buscar').keyup(function () {
        var value = $(this).val();
        if (value.length > 0) {
            $('#ciudad_buscar').attr("disabled", true);
            $('#barrio_buscar').attr("disabled", true);
            $('#tipo_inmueble_buscar').attr("disabled", true);
            $('#tipo_gestion_buscar').attr("disabled", true);
            $('#precio_minimo_buscar').attr("disabled", true);
            $('#precio_maximo_buscar').attr("disabled", true);
            $('#area_minima_buscar').attr("disabled", true);
            $('#area_maxima_buscar').attr("disabled", true);
            $('#banios_buscar').attr("disabled", true);
            $('#alcobas_buscar').attr("disabled", true);
            $('#garajes_buscar').attr("disabled", true);
        } else {
            $('#ciudad_buscar').removeAttr("disabled");
            $('#barrio_buscar').removeAttr("disabled");
            $('#tipo_inmueble_buscar').removeAttr("disabled");
            $('#tipo_gestion_buscar').removeAttr("disabled");
            $('#precio_minimo_buscar').removeAttr("disabled");
            $('#precio_maximo_buscar').removeAttr("disabled");
            $('#area_minima_buscar').removeAttr("disabled");
            $('#area_maxima_buscar').removeAttr("disabled");
            $('#banios_buscar').removeAttr("disabled");
            $('#alcobas_buscar').removeAttr("disabled");
            $('#garajes_buscar').removeAttr("disabled");
        }
    });
   
        // Funcion para cargar departamentos, ciudades y barrios
        $.ajax({
            url: PROTOCOLO + '://www.simi-api.com/ApiSimiweb/response/v2/departamento',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:' + TOKEN));
            },
            'dataType': "json",
            success: function (depto) {
                for (var i = 0; i < depto.length; i++) {
                    // Funcion para traer ciudades
                    $.ajax({
                        url: PROTOCOLO + '://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/' + depto[i].id,
                        type: 'GET',
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader(
                                'Authorization',
                                'Basic ' + btoa('Authorization:' + TOKEN));
                        },
                        'dataType': "json",
                        success: function (ciudad) {
                            var ciudades_resultados = " ";
                            for (var i = 0; i < ciudad.length; i++) {
                                ciudades_resultados +=
                                    '<option value="' + ciudad[i].id + '">' +
                                    ciudad[i].nombre +
                                    '</option>';
                            }
                            $('#ciudad_buscar').append(ciudades_resultados);
                            // Funcion para traer barrios
                        }
                    });
                }
            }
        });

        $("#ciudad_buscar").change(function () {
            var ciudad_id = $("#ciudad_buscar option:selected").val();
            // Limpia el selected de los barrios cada vez que se cambia de ciudad
            $('#barrio_buscar').empty();
            $.ajax({
                url: PROTOCOLO + '://www.simi-api.com/ApiSimiweb/response/v2/barrios/idCiudad/' + ciudad_id,
                type: 'GET',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader(
                        'Authorization',
                        'Basic ' + btoa('Authorization:' + TOKEN));
                },
                'dataType': "json",
                success: function (barrios) {
                    var barrios_resultados = " ";
                    barrios_resultados +=
                        '<option value="0">Barrio</option>';
                    for (var i = 0; i < barrios.length; i++) {
                        barrios_resultados +=
                            '<option value="' + barrios[i].id + '">' +
                            barrios[i].nombre +
                            '</option>';
                    }
                    $('#barrio_buscar').append(barrios_resultados);
                }
            });
        });
        // Funcion para traer tipo de gestion ejm: "arriendo, venta etc."
        $.ajax({
            url: PROTOCOLO + '://www.simi-api.com/ApiSimiweb/response/gestion',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:' + TOKEN));
            },
            'dataType': "json",
            success: function (gestion) {
                //Eliminar un campo del array 
                gestion.splice(2, 1)


                var gestion_resultados = " ";
                for (var i = 0; i < gestion.length; i++) {

                    gestion_resultados +=
                        '<option value="' + gestion[i].idGestion + '">' +
                        gestion[i].Nombre +
                        '</option>';


                }
                $('#tipo_gestion_buscar').append(gestion_resultados);

            }
        });

        // Funcion que trae el tipo de inmueble ejm: apartamento casa etc
        $.ajax({
            url: PROTOCOLO + '://www.simi-api.com/ApiSimiweb/response/v2/tipoInmuebles/unique/1',
            type: 'GET',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:' + TOKEN));
            },
            'dataType': "json",
            success: function (operacion) {
                //   El resultado lo guardo en una variable Result 
                var result = operacion;
                // Utilizo sort para ordenarlos
                result.sort(function (a, b) {
                    if (a.Nombre > b.Nombre) {
                      return 1;
                    }
                    if (a.Nombre < b.Nombre) { 
                      return -1;
                    }
                    return 0;
                  });
                
               var operacion_resultados = " ";
                for (var i = 0; i < result.length; i++) {
                    operacion_resultados +=
                        '<option value="' + result[i].idTipoInm + '">' +
                        result[i].Nombre +
                        '</option>';
                }
                $('#tipo_inmueble_buscar').append(operacion_resultados);
            }
    
        });

        // Buscar por medio del boton creado en el buscador
        $('#buscar').click(function () {
            busqueda();
        });

        // buscar por medio de la tecla enter
        $('body').keyup(function (e) {
            if (e.keyCode == 13) {
                busqueda();
            }
        });
    });


    // Definir las variables que se van a usar para almacenar los datos que se traen del buscador
    var code,
        ciudad_buscar,
        barrio_buscar,
        gestion_buscar,
        tipo_inmueble_buscar,
        alcobas_buscar,
        banios_buscar,
        precio_maximo_buscar,
        precio_minimo_buscar,
        area_minima_buscar,
        area_maxima_buscar,
        garajes_buscar;


    // Esta funcion trae los campos digitados en el buscador
    var busqueda = function () {
        code = $("#codigo_buscar").val();
        ciudad_buscar = $('#ciudad_buscar option:selected').val();
        barrio_buscar = $('#barrio_buscar option:selected').val();
        gestion_buscar = $('#tipo_gestion_buscar option:selected').val();
        tipo_inmueble_buscar = $('#tipo_inmueble_buscar option:selected').val();
        precio_minimo_buscar = $('#precio_minimo_buscar').val();
        precio_maximo_buscar = $('#precio_maximo_buscar').val();
        area_minima_buscar = $('#area_minima_buscar').val();
        area_maxima_buscar = $('#area_maxima_buscar').val();
        alcobas_buscar = $('#alcobas_buscar').val();
        banios_buscar = $('#banios_buscar').val();
        garajes_buscar = $('#garajes_buscar').val();

        precio_minimo_buscar = precio_minimo_buscar.replace('.', '');
        precio_maximo_buscar = precio_maximo_buscar.replace('.', '');
        // Si no trae nada del buscador definirla en cero

        ciudad_buscar = existeCampo(ciudad_buscar);
        barrio_buscar = existeCampo(barrio_buscar);
        gestion_buscar = existeCampo(gestion_buscar);
        tipo_inmueble_buscar = existeCampo(tipo_inmueble_buscar);
        precio_minimo_buscar = existeCampo(precio_minimo_buscar);
        precio_maximo_buscar = existeCampo(precio_maximo_buscar);
        area_minima_buscar = existeCampo(area_minima_buscar);
        area_maxima_buscar = existeCampo(area_maxima_buscar);
        alcobas_buscar = existeCampo(alcobas_buscar);
        banios_buscar = existeCampo(banios_buscar);
        garajes_buscar = existeCampo(garajes_buscar);



        if (code !== "") {
            window.location.href = 'detalle_inmueble.php?co=' + code + '';
        } else {
            window.location.href = 'inmuebles.php?ci=' + ciudad_buscar +
                '&bar=' + barrio_buscar +
                '&ge=' + gestion_buscar +
                '&in=' + tipo_inmueble_buscar +
                '&aremin=' + area_minima_buscar +
                '&aremax=' + area_maxima_buscar +
                '&premin=' + precio_minimo_buscar +
                '&premax=' + precio_maximo_buscar +
                '&alcobas=' + alcobas_buscar +
                '&banios=' + banios_buscar +
                '&garajes=' + garajes_buscar +
                '';
        }
    }

