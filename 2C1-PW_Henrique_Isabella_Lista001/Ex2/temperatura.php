<?php

    $texto = $_POST["texto"];

    if (str_contains($texto, 'F')) {
        $a = explode("F", $texto);
        $celsius = 5/9 * ((int)$a[0] - 32);
        echo "{$a[0]} em Celsius é igual a $celsius °C";
    }
    else if (str_contains($texto, 'C')){
        $a = explode("C", $texto);
        $fahrenheit = ($a[0] * 1.8) + 32;
        echo "{$a[0]} em Fahrenheit é igual a $fahrenheit °F";
    }
    else{
        echo "Erro: Digite a unidade da temperatura (C ou F)";
    }

?>