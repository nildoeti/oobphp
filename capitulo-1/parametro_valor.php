<?php

// exemplo de passagem de valor por valor
// function Incrementa ($valor1, $valor2) {
//     $valor1 += $valor2;
// }
//
// $valor3 = 10;
// Incrementa($valor3, 20);
// echo $valor3;
//


// exemplo de passage de valor por parâmetro
function parametros (&$variavel, $valor) {
    $variavel += $valor;
}
$a = 10;
parametros($a, 20);
echo $a;
