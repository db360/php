<?php include 'includes/header.php';


// in_array - buscar elementos en un array

$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump( in_array('Tablet', $carrito) );
var_dump( in_array('Polla', $carrito) );

//Ordenar elementos en un array
$numeros = array(1,2,3,4,5,1,2);
sort($numeros);  // de menor a mayor
echo "<pre>";

var_dump($numeros);
echo "</pre>";
rsort($numeros); // de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar array asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'David'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente);  // Ordena por valores
ksort($cliente); // ordena por llaves (orden alfabetico a-z)
krsort($cliente); // ordena por llaves (orden alfabetico a-z)
arsort($cliente); // ordena por valores, z primero

echo "<pre>";
var_dump($cliente);
echo "</pre>";



include 'includes/footer.php';