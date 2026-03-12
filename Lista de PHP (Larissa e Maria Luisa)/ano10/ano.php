<?php

$n = $_GET["n"];

if ($n % 4 == 0 && $n % 100 != 0) {
    $resultado = "O ano $n é bissexto";
} else {
    $resultado = "O ano $n não é bissexto";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>

<body>

<h1>Verificação:</h1>

<p><strong><?php echo $resultado; ?></strong></p>

<br>

<a href="index.php">Voltar</a>

</body>
</html>

</html>