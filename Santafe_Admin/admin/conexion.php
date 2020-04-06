<?php

function Conect()
{
    $echo = mysqli_connect("localhost","root","","dexcondigital_noticias_inmueble");
    return $echo;
}

?>