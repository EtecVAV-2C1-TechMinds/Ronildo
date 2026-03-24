<?php

$n = $_GET["n"];

$a = 0;
$b = 1;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Termos da Sequência</title>
</head>

<body>

<h1>Sequência de Fibonacci:</h1>

<?php

for ($i = 1; $i <= $n; $i++) {

echo $a . "<br>";

$result = $a + $b;
$a = $b;
$b = $result;

}

?>

<br>
<a href="index.php">Voltar</a>

</body>
</html>