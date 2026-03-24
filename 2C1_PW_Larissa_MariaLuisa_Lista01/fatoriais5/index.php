<!--
Data: 06/03/2026
Autor: Larissa Ribeiro e Maria Luisa Gibrail
Objetivo:Desenvolver um programa que leia 5 números inteiros,
calcule o fatorial de cada um deles e apresente a soma total desses fatoriais.

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.


-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Somatório de Fatoriais </title>
</head>
<body>

  <h1>Somatório de Fatoriais</h1>

  <form action="calcula.php" method="get">
    <label>Primeiro número:</label>
    <input type="number" name="n1" step="any" required>
    <br><br>

    <label>Segundo número:</label>
    <input type="number" name="n2" step="any" required>
    <br><br>

     <label>Terceiro número:</label>
    <input type="number" name="n3" step="any" required>
    <br><br>

     <label>Quarto número:</label>
    <input type="number" name="n4" step="any" required>
    <br><br>

     <label>Quinto número:</label>
    <input type="number" name="n5" step="any" required>
    <br><br>

    

    <input type="submit" value="Calcular soma dos fatoriais">
  </form>

</body>
</html>