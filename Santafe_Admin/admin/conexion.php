<?php

function Conect() {
    try {
        $echo = new PDO( 'mysql:host=localhost;port=3306;dbname=dexcondigital_noticias_inmueble;', 'root', '', array( PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES utf8" ) );
        $echo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $echo->exec( "set names utf8" );
        return $echo;

    } catch ( Exception $e ) {
        die( 'Error:' . $e->getMessage() );
    }
}
?>
