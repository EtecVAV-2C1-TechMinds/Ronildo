<?php

    $n1 = $_POST["n1"];

    if ($n1 >= 100 && $n1 <=200) {
        echo "$n1 está entre 100 e 200.";
    }
    else {
        echo "$n1 não está entre 100 e 200.";
    }

?>