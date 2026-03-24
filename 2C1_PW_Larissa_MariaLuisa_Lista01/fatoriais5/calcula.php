<?php

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];
$n4 = $_GET["n4"];
$n5 = $_GET["n5"];

function fatorial($n){
    $fat = 1;

    for ($i = 1; $i <= $n; $i++){
        $fat = $fat * $i;
    }

    return $fat;
}

$f1 = fatorial($n1);
$f2 = fatorial($n2);
$f3 = fatorial($n3);
$f4 = fatorial($n4);
$f5 = fatorial($n5);

$soma = $f1 + $f2 + $f3 + $f4 + $f5;

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Resultado </title>

</head>

<body>

<h1>Somatório de Fatoriais</h1>

<p>Soma dos fatoriais = <strong><?php echo $soma; ?></strong></p>


<a href="index.php">Voltar</a>

</body>

</html>