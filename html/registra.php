<html>    

<head>    
<title>Guardamos los datos en la base de datos</title>    
</head>    

<body>    
<?php    

// Recibimos por POST los datos procedentes del formulario    

$email = $_POST["email"];    
$name = $_POST["name"];    
$lastname = $_POST["lastname"];    
$subject = $_POST["subject"];
$description = $_POST["description"];    


// Abrimos la conexion a la base de datos    
include("abre_conexion.php");    

$_GRABAR_SQL = "INSERT INTO customers (email,name,last_name,subject,description) VALUES ('$email','$name',
	'$lastname','$subject','$description')";    
echo mysqli_query($mysqli,"INSERT INTO customers (email,name,last_name,subject,description) VALUES ('$email','$name','$lastname','$subject','$description')");


// Cerramos la conexion a la base de datos    
include("cierra_conexion.php");    

// Confirmamos que el registro ha sido insertado con exito    

echo "    
<p>Los datos han sido guardados con exito.</p>    

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>    
";    
?>    
</body>    

</html>   