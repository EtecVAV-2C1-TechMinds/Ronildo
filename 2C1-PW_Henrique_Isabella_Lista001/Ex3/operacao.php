<?php

    $operacao = $_POST["operacao"];
    $result = null;

    if (str_contains($operacao, '+')) {
        $a = explode("+", $operacao);
        $result = $a[0] + $a[1];
    }
    elseif (str_contains($operacao, '-')){
        $a = explode("-", $operacao);
        $result = $a[0] - $a[1];
    }
    elseif (str_contains($operacao, '*')){
        $a = explode("*", $operacao);
        $result = $a[0] * $a[1];

    }
    elseif (str_contains($operacao, '/')){
        $a = explode("/", $operacao);
        $result = $a[0] / $a[1];
    }

    if ($result != null){
        echo "$operacao =  $result";
    }
    else{
        echo "Não é possível realizar a operação";
    }

?>