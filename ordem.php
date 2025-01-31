<?php

$notas = [
    [
        "aluno" => "Maria",
        "nota" => 10
    ],
    [
        "aluno" => "Bernardo",
        "nota" => 8
    ],
    [
        "aluno" => "Pedro",
        "nota" => 9
    ]
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');

var_dump($notas);