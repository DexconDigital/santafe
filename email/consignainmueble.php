<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $precio = $_POST['precio'];
    $transaccion = $_POST['transaccion'];
    $inmueble = $_POST['tipo_inm'];
    
    $area = $_POST['area'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $mensaje = $_POST['mensaje'];
    
    
}

$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    // Mensaje para enviar
    
    $mail->isHTML(true);
    $mail->setFrom('SantaFeDc@arrendamientossantafe.com', 'SantaFeDc@arrendamientossantafe.com');
    // $mail->addAddress('comercial@inmobiliariasantafedc.com');
    // $mail->addAddress('wdsp9898@gmail.com');
    // $mail->addAddress('desarrollo2@dexcondigital.com');
    

    $mail->Subject='Mensaje desde la página web SantaFe DC';
    $mail->Body = '<span>Hola, '.$nombre.' quiere recibir información sobre como conisgnar un inmueble.</span>
                   <h4>Sus datos de contacto son:</h4>
                    <ul>
                        <li>Nombre del Propietario: '.$nombre.'</li>
                        <li>Correo electrónico: '.$correo.'</li>
                        <li>Numero telefónico del propietario: '.$telefono.'</li>
                        <li>Precio: '.$precio.'</li>
                        <li>Tipo del Inmueble: '.$inmueble.'</li>
                        <li>Tipo de transacción: '.$transaccion.'</li>
                        <li>Ciudad: '.$ciudad.'</li>
                        <li>Dirección: '.$direccion.'</li>
                        <li>Áréa del inmueble (mts²): '.$area.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias.');
    window.location.href='../index.php'
         </script>";

}catch(Exception $e){

    echo 'algo salio mal' , $e->getMessage();
}
