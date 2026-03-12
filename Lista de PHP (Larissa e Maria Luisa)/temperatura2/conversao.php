<?php

$n1 = $_GET["n1"];
$unit = strtoupper($_GET["unit"]);

if ($unit == "F") {
    $result = 5/9 * ($n1 - 32);
    $final = "C";
}
else if ($unit == "C") {
    $result = $n1 * 1.8 + 32;
    $final = "F";
}
else {
    $result = "Unidade inválida";
}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Resultado</title>

</head>

<body>

<h1>Resultado da conversão é igual a: </h1>

<p><strong><?php echo $n1 . "°" . $unit . " = " . $result . "°" . $final; ?></strong></p>

<a href="index.php">Voltar</a>

</body>

</html>