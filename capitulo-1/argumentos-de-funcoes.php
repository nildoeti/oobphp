<?php

// exemplo 1
function argumentos1 ($input) {
    // echo "%input[0] + $input[1] = ", $input[0] + $input[1];
}

// exemplo 2
function argumentos2 (
    $primeiro,
    $segundo,
    $terceiro,
    $quarto = 5,
    $quinto = 'teste'
) {
    // ...
}

// argumento por referência
function argumentos3 (&$treinamento) {
	$treinamento .= 'PHP Orientado a Objetos';
}

$frase = 'Estou treinando ';
argumentos3($frase);
echo $frase;
