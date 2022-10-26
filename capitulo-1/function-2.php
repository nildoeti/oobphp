<?php
    function imc($peso, $altura) {
        return $peso / ($altura * $altura);
    }

    echo imc(80, 1.80);
