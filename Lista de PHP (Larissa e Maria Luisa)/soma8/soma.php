<?php

function soma($n){

$total = 0;

for($i = 0; $i <= $n; $i++){
$total = $total + $i;
}

return $total;

}

$n = $_GET["n"];
$resultado = soma($n);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>

<body>

<h1>Resultado</h1>

<p>A soma de 0 até <?php echo $n; ?> é: <?php echo $resultado; ?></p>

<br>

<a href="index.php">Voltar</a>

</body>
</html>