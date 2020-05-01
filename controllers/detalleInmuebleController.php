<?php
require 'variables/config.php';
require 'modelo_inmueble.php';

$co = 0;
if (isset($_GET['co'])) {
    $co = $_GET['co'];
}

$ch = curl_init();
$headers =  'Authorization:lJjeVYJnFghJkIJxuwdqYfM2D1VQombpiNqv1NBF-180';
curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' . $co . '');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true);
$r['ValorVenta'] = number_format($r['ValorVenta']);
$r['ValorCanon'] = number_format($r['ValorCanon']);


$administracion = $r['Administracion'];
$area_construida = $r['AreaConstruida'];
$area_privada = $r['AreaLote'];
$edad_inmueble = $r['EdadInmueble'];
$estrato = $r['Estrato'];
$gestion = $r['Gestion'];
$barrio = $r['barrio'];
$tipo_inmueble = $r['Tipo_Inmueble'];
$alcobas = $r['alcobas'];
$banios = $r['banos'];
$ciudad = $r['ciudad'];
$descripcion = $r['descripcionlarga'];
$garaje = $r['garaje'];
$asesor = $r['asesor'][0];
$foto360 = $r['video360'];





if($asesor['FotoAsesor'] == 'https://simicrm.app/mcomercialweb/'){
    $asesor['FotoAsesor'] = 'images/no_image.png';
}


function similares($ciudad, $inmueble)
{
    $ch = curl_init();
    $headers =  'Authorization:' . TOKEN . '';
    curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/1/total/2/departamento/0/ciudad/' . $ciudad . '/zona/0/barrio/0/tipoInm/' . $inmueble . '/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_USERPWD, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    $respuesta = json_decode($result, true);
    if (!is_array($respuesta)) {
        $ch = curl_init();
        $headers =  'Authorization:' . TOKEN . '';
        curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/1/total/2/departamento/0/ciudad/' . $ciudad . '/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_USERPWD, $headers);
        $result = curl_exec($ch);
        curl_close($ch);
        $respuesta = json_decode($result, true);
        modelo_inmueble_similare($respuesta['Inmuebles'], 3);
    }else{
        modelo_inmueble_similare($respuesta['Inmuebles'], 3);
    }
}
