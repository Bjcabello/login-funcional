<?php
/* Establece conexiom al servidor y el localhost es el nombre del servidor  q se va usar */
$host = "localhost";
/* la variable user el nombre de usuario es root*/
$user= "root";
/*Nombre de la base de datos */
$bd = "login_p";

$conection = mysqli_connect($host,$user,'',$bd);

$go = "Conexion establecida";

if($conection != true){

    mysqli_error($conection);

}