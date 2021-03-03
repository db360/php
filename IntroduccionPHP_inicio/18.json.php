<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24',
        'precio' => 400,
        'disponible' => true
    ],
    [
        'nombre' => 'Ordenador',
        'precio' => 1000,
        'disponible' => false
    ],
];

echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

$json_array = json_decode($json);


echo "</pre>";
var_dump($json);
var_dump($json_array);

include 'includes/footer.php';