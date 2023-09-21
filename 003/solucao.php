<?php
/**
 * Exercício 003.1: Declarando variáveis em PHP
 * 
 * Crie uma variável chamada $nome e atribua uma string a ela.
 * Imprima seu valor na tela usando echo.
 */

$nome="Alan"; // Coloque seu nome aqui
echo $nome;

echo "<br><br>"; // fim do exercício 

/**
 * Exercício 003.2: Aritmética com variáveis
 * 
 * Crie duas variáveis, x e y. 
 * Atribua 2 a x, 3 a y.
 * Imprima seu valor na tela usando echo.
 */
$x=2;
$y=2;
echo $x + $y; // Deve aparecer 4

echo "<br><br>"; // fim do exercício 

/**
 * Exercício 003.3: Atualizando variáveis rapidamente
 * 
 * PHP permite que você use um atalho para atualizar
 * variáveis usando o valor das mesmas, mais uma operação.
 * 
 * Por exemplo, se tivermos a seguinte variável:
 * 
 * $x = 5;
 * 
 * E quisermos adicionar 2 a seu valor, podemos fazer:
 * 
 * $x = $x + 2;
 * 
 * Ou o atalho:
 * 
 * $x += 2;
 * 
 * Basta colocar a operação que você quer fazer antes do 
 * sinal de atribuição (=)
 */

  $y = 12;

  // Considerando subtração $y - 2, digite seu atalho e ecoe $y
  $y -= 2;
  echo $y; // Deve aparecer 10
  echo "<br>";

  // Considerando multiplicação $y * 2, digite seu atalho e ecoe $y
  $y *= 2;
  echo $y; // Deve aparecer 20
  echo "<br>";

  // Considerando divisão $y / 4, digite seu atalho e ecoe $y
  $y /= 4;
  echo $y; // Deve aparecer 5

?>

<p>
  <a href="https://www.w3schools.com/php/php_comments.asp" target="_blank">Referência</a>
</p>

<p>
  <a href="../010/Tabela de operadores.html">Lista de Operadores de PHP</a>
</p>