<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutentificado(bool $autentificado) : ?string {
    if($autentificado) {
        return "El Usuario Esta autentificado";
    }else {
        return null;
    } 
}

$usuario = usuarioAutentificado(false);
echo $usuario;





include 'includes/footer.php';