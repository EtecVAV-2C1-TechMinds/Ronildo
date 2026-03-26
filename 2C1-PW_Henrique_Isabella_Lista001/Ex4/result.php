<?php

    $n = $_POST["n"];

    for($i = 0; $i <= $n; $i++){
        echo "<p>\n</p>";

        for($x = 1; $x <= $i; $x++){
            echo "$x ";
        }
    }
    
?>