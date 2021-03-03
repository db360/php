<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'David',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";

// echo $cliente['nombre'];
// echo $cliente['informacion']['disponible'];

$cliente['codigo'] = 13213546;


echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';