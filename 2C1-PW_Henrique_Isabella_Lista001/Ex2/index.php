<!--
Data: 10/03/2026
Autor: Henrique Silvestre Martin e Isabella Fernanda da Silva Barbosa
Objetivo: Desenvolver a lógica de programação utilizando PHP, aplicando estruturas condicionais, laços de repetição, funções e organização de código.

Exercício 2 - Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.

Fórmula: C = 5/9 × (F − 32)
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Conversão de Temperatura</title>
</head>

<body>

    <h1>Conversão de Temperatura</h1>

    <form action="temperatura.php" method="POST">
        <label for="texto">A temperatura é: </label>
        <input type="text" name="texto"><br>
        <button type="submit">Resultado</button>
    </form>
</body>

</html>