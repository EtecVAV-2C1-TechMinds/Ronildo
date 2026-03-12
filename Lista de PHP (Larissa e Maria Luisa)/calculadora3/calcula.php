<?php

$n1 = $_GET["n1"];

$n2 = $_GET["n2"];

$op = $_GET["op"];



if ($op == "+"){
   
    $result = $n1 + $n2; 
}
else if  ($op == "-"){
    $result = $n1 - $n2;
}
else if  ($op == "*"){
    $result = $n1 * $n2;
}
else if  ($op == "/"){
    $result = $n1 / $n2;
}
?>


<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Resultado </title>

</head>

<body>

<h1>Resultado </h1>

<p>
<strong>
<?php echo $n1 . " " . $op . " " . $n2 . " = " . $result; ?>
</strong>
</p>

<a href="index.php">Voltar</a>

</body>

</html>