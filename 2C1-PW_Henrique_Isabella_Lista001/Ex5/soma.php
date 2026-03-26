<?php

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $n4 = $_POST["n4"];
    $n5 = $_POST["n5"];
    $n = [$n1, $n2, $n3, $n4, $n5];

    $fat = 0;
    $soma = 0;

    foreach($n as $n){
        for($i = 1; $i <= $n; $i++){
            if($fat == 0){
                $fat = 1;
            }
            else{
                $fat *= $i;
            }
        }

        $soma = $soma + $fat;
        $fat = 0;
    }

    echo "$n1! + $n2! + $n3! + $n4! + $n5! = $soma";

?>