<?php

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];
$n4 = $_GET["n4"];
$n5 = $_GET["n5"];
$n6 = $_GET["n6"];
$n7 = $_GET["n7"];
$n8 = $_GET["n8"];

$positivos = "";
$negativos = "";

$nums = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8];

foreach ($nums as $num) {

    if ($num >= 0) {
        $positivos .= $num . " ";
    } 
    else {
        $negativos .= $num . " ";
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>

<body>

<h1>Resultado da separação</h1>

<p><strong>Números positivos:</strong></p>
<p><?php echo $positivos; ?></p>

<p><strong>Números negativos:</strong></p>
<p><?php echo $negativos; ?></p>

<br>
<a href="index.php">Voltar</a>

</body>
</html>