<?php 

// Parametros a configurar para la conexion de la base de datos 

/*$hotsdb = "127.0.0.1:3306";    // sera el valor de nuestra BD 
$basededatos = "api-webs";    // sera el valor de nuestra BD 

$usuariodb = "root";    // sera el valor de nuestra BD 
$clavedb = "";    // sera el valor de nuestra BD 

$tabla_db1 = "customers";    // sera el valor de una tabla 
$tabla_db2 = "otratabla";    // sera el valor de otra tabla 

// Fin de los parametros a configurar para la conexion de la base de datos 



$conexion_db = mysqli_connect("$hotsdb","$usuariodb","$clavedb") 
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE"); 
    $db = mysqli_select_db("$basededatos", $conexion_db) 
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE"); 

*/

//$mysqli = new mysqli("localhost","root","unacuentabineada","id10030162_web");
$mysqli = new mysqli("remotemysql.com","fiw24bP3O7","D1n3U3HN1E","fiw24bP3O7");

if($mysqli -> connect_errno){
	echo "Falló al conectar a Mysql: (". $mysqli->connect_errno . ")". $mysqli->connect_error;

}
echo $mysqli->host_info ."\n";

?>
