<?php include 'includes/header.php';

// While loop

$i = 0; // inicializador

while($i <10) {
    echo $i . "<br>";

    $i++; // Incremento
}

echo "<br>";
// Do while

$i = 100;

do {
    echo $i . "<br>";

    $i++;
} while($i <10);

    echo "<br/>";
/**
 * 3 imprimir Fizz
 * 5 Imprimir Buzz
 * 3 y 5 imprimir fizz buzz
 */


// For Loop
// for($i = 1; $i < 1000; $i++) {
//     if($i % 3 === 0 && $i % 5 === 0) {
//         echo $i . " - Fizz Buzz<br>";
//     }
//     else if($i % 3 === 0) {
//         echo $i . " - Fizz <br>";
//     }else if($i % 5 === 0) {
//         echo $i . " - Buzz <br>";
//     } else {
//         echo $i . "<br/>";
//     }
// }

//For each Loop

$clientes = array('David', 'Ernesto', 'Tocamelas');

foreach( $clientes as $cliente ) {
    echo  $cliente . "<br/>";
}

// for($i = 0; $i < count($clientes); $i++) {
//     echo $clientes[$i] . "<br/>";  
// }
echo "<br/>";

$cliente = [
    'nombre' => 'David',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach ( $cliente as $key => $valor ):
    echo $key . " - " . $valor . '<br/>';
endforeach;


include 'includes/footer.php';