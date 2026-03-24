<?php

$n1 = $_GET["n1"];

if ($n1 >= 100 && $n1 <= 200){
    $result = "O número está entre 100 e 200.";
}
else{
    $result = "O número não está entre 100 e 200.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>

<body>

<h1>Resultado</h1>

<p>Número digitado: <?php echo $n1; ?></p>

<p><strong><?php echo $result; ?></strong></p>

<a href="index.php">Voltar</a>

</body>
</html>