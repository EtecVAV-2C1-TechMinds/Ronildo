<?php

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];
$n4 = $_GET["n4"];
$n5 = $_GET["n5"];

function media($v){
    
    $soma = 0;
    $quantidade = count($v);

    foreach($v as $num){
        $soma = $soma + $num;
    }

    $resultado = $soma / $quantidade;

    return $resultado;
}

$numeros = [$n1, $n2, $n3, $n4, $n5];

$result = media($numeros);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>

<body>

<h1>Média Aritmética</h1>

<p>Números digitados: 
<?php
echo $n1 . " " . $n2 . " " . $n3 . " " . $n4 . " " . $n5;
?>
</p>

<p><strong>Média = <?php echo $result; ?></strong></p>

<a href="index.php">Voltar</a>

</body>
</html>