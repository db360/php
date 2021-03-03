<?php include 'includes/header.php';

$nombreCliente = "David Martinez";


//Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

// Convertir a mayusculas
echo strtoupper($nombreCliente);

//Convertirlo en minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "CORREO@correo.com";

var_dump( strtolower($mail1) === strtolower($mail2) );

echo str_replace('David', 'D', $nombreCliente);



//revisar si un string existe o no
echo strpos($nombreCliente, 'Martinez');

$tipoCLiente = "Premium";

echo "<br>";

echo "El Cliente" . $nombreCliente . " es " . $tipoCLiente;

echo "El cliente {$nombreCliente} es ${tipoCLiente} ";

include 'includes/footer.php';