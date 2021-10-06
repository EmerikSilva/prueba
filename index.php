<?php

require_once 'persona1.php';

$persona = new persona1();

$persona->setNombre('Emerik')
    ->setpeso(140)
    ->setestatura(1.73)
    ->calcularIMC(140,1.73);
