<?php

function calcula_obsidade($peso, $altura) {
    return $peso / ($altura * $altura);
}

echo calcula_obsidade(80, 1.90);
