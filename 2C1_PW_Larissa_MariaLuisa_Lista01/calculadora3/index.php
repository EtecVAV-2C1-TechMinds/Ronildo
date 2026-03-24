<!--
Data: 06/03/2026
Autor: Larissa Ribeiro e Maria Luisa Gibrail
Objetivo: Progredir na linguagem de PHP.

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Calculadora Aritmética </title>
</head>
<body>

  <h1>Calculadora Aritmética</h1>

  <form action="calcula.php" method="get">
    <label>Primeiro número:</label>
    <input type="number" name="n1" step="any" required>
    <br><br>

    <label>Segundo número:</label>
    <input type="number" name="n2" step="any" required>
    <br><br>

    <label>Digite a operação (+, -, *, /):</label>
    <input type="text" name="op" maxlength="1" required>
    <br><br>

    <input type="submit" value="Calcular">
  </form>

</body>
</html>