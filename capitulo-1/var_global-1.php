<?php
$total = 0; // varriável global pois esta fora do escopo da função

function km2mi($quilometro) {
    global $total; // acesso na varriável global $total
    $total += $quilometro;
    return $quilometro * 0.60;
}

echo km2mi(10);
