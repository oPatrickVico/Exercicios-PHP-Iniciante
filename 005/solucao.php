<?php
/** 
 * Exercício 005.1: Resolva o erro de escopo
 * 
 * A função a seguir dá erro.
 * Mova a variável para que o erro seja resolvido.
*/

function somaXeY() {
  $x = 5;
  $y = 5;
  echo $x + $y;
}

somaXeY(); // Deve aparecer 10

echo "<br>"; // fim do exercício

/** 
 * Exercício 005.2: Resolva o erro de escopo, de novo
 * 
 * A mesma função, o mesmo erro.
 * Agora, use a palavra-chave global dentro da função, para resolver o problema.
*/

$a = 5;

function somaAeB() {
  global $a;
  $b = 5;
  echo $a + $b;
}

somaAeB(); // Deve aparecer 10

echo "<br>"; // fim do exercício

/** 
 * Exercício 005.3: Variáveis que sobrevivem
 * 
 * Quando uma função termina de ser executada, as variáveis locais morrem.
 * Modifique a função incrementa, de forma que ela opere corretamente.
 * Use a palavra-chave static.
*/

function incrementa() {
  static $total = 0;
  echo $total, "<br>";
  $total ++;
}

incrementa(); // Mostra 0
incrementa(); // Mostra 1
incrementa(); // Mostra 2

?>

<p>
  <a href="https://www.w3schools.com/php/php_variables_scope.asp" target="_blank">Referência</a>
</p>