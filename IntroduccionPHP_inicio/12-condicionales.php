<?php include 'includes/header.php';


$login = true;
$admin = true;

if($login && $admin) {
  echo "Usuario Login Ok";   
} else {
    echo "No estas logeado, incia sesion cabronazo";
}

echo "<br>";

// If anidados

$cliente = [
    'nombre' => 'David',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Regular'
    ]
];



if(!empty($cliente)) {
    echo "El array de cliente NO está vacio";
    echo "<br>";

    if($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo disponible";
        echo "<br>";
    } else {
        echo "No hay saldo, estás más tieso que la mojama";
        echo "<br>";
    }
} 

echo "<br>";
// Else If

if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion'] ['tipo'] === 'Premium') {
    echo " Cliente Premium";
} else {
    echo "No hay cliente definido o no es premium";
}


echo "<br>";
//Switch 

$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, excelente lenguaje!";
        break;
    case 'JavasCript':
        echo "Eres el puto amo del JS";
        break;
    case 'HTML':
        echo "Algun tonto tenia que haber";
        break;    
    default:
        echo "Algún lenguage que no sabemos cual es";
        break;
}
include 'includes/footer.php';