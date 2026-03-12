<!--
Data: 06/03/2026
Autor: Larissa Ribeiro e Maria Luisa Gibrail
Objetivo:Desenvolver um programa que leia um valor de temperatura e um caractere indicando a unidade (C ou F)
e realize a conversão para a outra unidade.

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
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


  <form action="conversao.php" method="get">
    <label>Digite a temperatura desejada:</label>
    <input type="number" name="n1" step="any" required>
    <br><br>
    <label>Sua temperatura está em Fahrenheit (F) ou Celsius (C)</label>
    <input type="text" name="unit" step="any" required>
    <br><br>
  

    <input type="submit" value="Converta">
  </form>

</body>
</html>