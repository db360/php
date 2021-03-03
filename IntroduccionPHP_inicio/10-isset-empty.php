<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'David',
    'saldo' => 200
];


//Empty - Revisa sin un array esta vacio

var_dump( empty($clientes) );
var_dump( empty($clientes3) );
var_dump( empty($clientes2) );


// Isset - Revisar si un arreglo está creado o una propiedad definida

echo "<br>";
var_dump( isset($clientes4) );
var_dump( isset($clientes3) );
var_dump( isset($clientes2) );
var_dump( isset($clientes) );

// isset tambiem permite revisar una propiedad dentro de un array
echo "<br>";
var_dump( isset($cliente['nombre']) );
var_dump( isset($cliente['codigo']) );



include 'includes/footer.php';