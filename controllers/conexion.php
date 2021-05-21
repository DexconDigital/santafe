<?php
function Conect()
{
    /*$echo = mysqli_connect( "localhost", "root", "", "dexcondigital_noticias_inmueble" );
    return $echo;
    */
    try {
        //$echo2 = new PDO('mysql:host=50.62.209.73;port=3306;dbname=TodoOriente_noticias', 'todooriente_user', 'nosequeponer123');
        $echo2 = new PDO('mysql:host=localhost;port=3306;dbname=2018noticias', 'root', '');
        $echo2->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $echo2;

    } catch ( Exception $e ) {
        die( 'Error:' . $e->getMessage() );
    }
}
?>