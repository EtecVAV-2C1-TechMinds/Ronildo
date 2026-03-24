<?php

$n1 = $_GET["n1"];
$result = "";

for ($i = 1; $i <= $n1; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        $result .= $j . " ";
    }

    $result .= "<br>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>

<body>

<h2>Resultado:</h2>

<div>
<?php echo $result; ?>
</div>
<br>
<a href="index.php">Voltar</a>

</body>
</html>