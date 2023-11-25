<?php
    $nombre = "Jimmy";    
    $edad = 10;
    $precio = 3500.99;
    $isOcupado = false;

    const apellido = "Garcia";
    define("direccion", "avenida siempre viva");

    echo $nombre;
    echo $edad;
    echo $precio;
    echo $isOcupado;
    echo apellido;
    echo direccion;
    echo "\n";
    echo gettype($precio);

    $numero = "20.5";
    $numero2 = 10;
    $suma = $numero + $numero2;
    echo intval($suma);

?>