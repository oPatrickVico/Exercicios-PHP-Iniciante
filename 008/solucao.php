<?php
/**
 * Exercício 008.1: Quanto é pi?
 * 
 * PHP possui várias funções matemáticas. Uma delas é o valor de pi.
 * Basta echoar pi();
 */

  echo pi(); // Deve aparecer 3.1415926535898

 echo "<br><br>"; // fim de exercício

/**
 * Exercício 008.2: Máximo e Mínimo
 * 
 * Ache os valores usando as funções max() e min().
 * Basta colocar os valores entre parenteses, tipo assim:
 *    func(1, 2, 3)
 */

 // Qual é o maior valor da sequência: 7, 9, 2, 4
  echo max(7, 9, 4, 2); // 9
  echo "<br>";

 // Qual é o menor valor da sequência: 40, -5, 0, -69, 7
  echo min(40, -5, 0, -69, 7); // -69

 echo "<br><br>"; // fim de exercício

/**
 * Exercício 008.3: Valores absolutos
 * 
 * Caso queira remover o sinal negativo de um valor, use a abs()
 */

  $negativo = -6;
  echo abs($negativo), ' não é negativo!';

  echo "<br><br>"; // fim de exercício

/**
 * Exercício 008.4: Sabendo suas raízes
 * 
 * Para descobrir a raíz quadrada de um número, use sqrt()
 */

  echo sqrt(9); // Deve aparecer 3
  echo "<br>";
  echo sqrt(25); // Deve aparecer 5
  echo "<br>";
  // Qual é a raíz quadrade de 16?
  echo sqrt(16);

echo "<br><br>"; // fim de exercício

/**
 * Exercício 008.5: Valores arrendondados
 * 
 * Uma forma de arrendondar decimais é usando round()
 */

  echo round(6.9); // Deve aparecer 6
  echo "<br>";
  echo round(4.19); // Deve aparecer 4
  echo "<br>";
  echo round(pi()); // Deve aparecer 3

 echo "<br><br>"; // fim de exercício

/**
 * Exercício 008.6: Valores aleatórios
 * 
 * Valores aleatórios podem ser gerados com rand(min, max),
 * onde x é o menor número e
 * y é o maior número
 * 
 * Se x ou y não são passados, o interpretador te dá um número grande
 */

  echo rand(0, 10); // Deve aparecer um número entre 0 e 10

?>

<p>
  <a href="https://www.w3schools.com/php/php_math.asp">
    Referência
  </a>
</p>