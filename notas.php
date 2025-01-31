<?php
$notas = [
    "Ana" => 6,
    "Bruno" => 8,
    "Maria" => 10,
    "Daniel" => 8
];

asort($notas);
// asort e arsort ordenam de forma crescente e decrescente levando em conta os VALORES

// ksort e krsort ordenam de forma crescente e descrescente levando em conta as CHAVES
ksort($notas);
var_dump($notas);