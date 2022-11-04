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
    // echo $frase;

    // Exemplo #4 Utilizando parâmetros padrão em funções
    function makecoffee ($type = 'capputino') {
        return "Fazendo uma chícara de café $type.\n";
    }

    // echo makecoffee();
    // echo makecoffee(null);
    // echo makecoffee("expresso");


    // Exemplo #5 Usando tipos não escalares como valores padrões
    function fazercafe ($tipo = array('capputino'), $cafeteria = NULL) {
        $dispositivo = is_null($cafeteria) ? 'Mãos' : $cafeteria;      
    }
    
    
