<?php
    $datos = array ('muestra' => 'hola');
    
    echo $datos ['muestra'] ?? 'Valor por defecto para muestra';
    echo "\n";
    echo $datos ['inexistente'] ?? 'Valor por defecto para inexistente';