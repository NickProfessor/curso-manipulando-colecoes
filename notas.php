<?php
$notas = [
    "Ana" => 6,
    "Bruno" => 8,
    "Maria" => 10,
    "Daniel" => 7
];

asort($notas);
// asort e arsort ordenam de forma crescente e decrescente levando em conta os VALORES

// ksort e krsort ordenam de forma crescente e descrescente levando em conta as CHAVES
ksort($notas);
var_dump($notas);

// gettype() checa o tipo do dado

//is_array verifica se é um array
//array_is_list verifica se é um array cm chaves númerico sem pular nenhum número

var_dump(array_key_exists('Maria', $notas)); // Verifica se essa chave existe no array

var_dump(isset($notas['Daniel'])); //Verifica se o valor da chave está definido e não é nulo

var_dump(in_array(0, $notas)); // pode ser adicionado um terceiro parâmetro para definir se o número deve ser strict
//in_array verifica se o valor existe no array

echo array_search(10, $notas); // tambem pode definir se a busca deve ser strict ou não