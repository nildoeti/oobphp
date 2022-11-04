<?php
$carro = ['Ferrari', 'BMW', 'Mercedes'];
// print_r($carro);
// print_r($carro[0]);

$endereco = [
    'cep' => '07970000',
    'numero' => 455,
    'cidade' => 'New York',
    'pais' => 'EUA'
];

// print_r($endereco['cidade']);/*  */
// print_r($endereco);


$funcionarios = [
    'fun-1' => [
        'nome' => 'Fulano',
        'sobrenome' => 'de Tal',
        'idade' => 23
    ],

    'fun-2' => [
        'nome' => 'Beltrano',
        'sobrenome' => 'de Tal'
    ],

    'fun-3' =>  array(
        'nome' => 'Ciclano',
        'sobrenome' => 'de Tal',
        'função' => 'Analista de sistema'
    )
];

if ($funcionarios['fun-2']['nome']) {
    print_r($funcionarios['fun-3']['nome']);
} else {
    echo 'chave inválida';
}

