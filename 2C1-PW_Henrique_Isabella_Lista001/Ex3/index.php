<!--
Data: 10/03/2026
Autor: Henrique Silvestre Martin e Isabella Fernanda da Silva Barbosa
Objetivo: Desenvolver a lógica de programação utilizando PHP, aplicando estruturas condicionais, laços de repetição, funções e organização de código.

Exercício 3 - Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.

-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora Aritmética</title>
</head>

<body>
    
    <h1>Calculadora Aritmética</h1>

    <form action="operacao.php" class="form" method="POST">
        <label for="operacao">Digite uma conta de 2 números e 1 operador: </label>
        <input type="text" name="operacao">

        <button type="submit">Resultado</button>
    </form>
</body>

</html>