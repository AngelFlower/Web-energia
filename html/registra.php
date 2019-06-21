<html>    

<head>    
	<title>Guardamos los datos en la base de datos</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
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
<div class='container'>    
	<div class='row card h-100'>
		<div class='card-body text-center form-control' style='padding-top:16rem;'>
		<h2 class='display-5 pb-3'>Los datos han sido guardados con exito.</h2>    
		<p><a href='../index.html' class='btn btn-primary'>Volver al inicio</a></p>
		</div>
	</div>
</div>
";
   
?>    

</body>    

</html>   