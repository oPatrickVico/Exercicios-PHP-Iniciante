<?php
/**
 * Exercício 007.1: Tipos de números
 * 
 * Altere os seguintes ecos, para que mostre 
 * qual é o tipo de número.
 * 
 * Em php, existem dois tipos de números: 
 * Inteiros(integers) e Decimais(floats)
 * 
 * Use a função var_dump()
 */

 echo 2;  // Deve aparecer int(2)
 echo "<br>";
 echo 3.14; // Deve aparecer float(3.14)

 // A função var_dump pode ser usada para descobrir o tipo de qualquer valor\variável.

 echo "<br>"; // fim do exercício

/**
 * Exercício 007.2: É uma string, mas é numérica 
 * 
 * PHP é capaz de reconhecer quando uma string é a representação de um número.
 * Para saber se a string é numérica, basta usar a função is_numeric().
 * Utilize a var_dump() para encontrar o resultado correto
 */

 echo 59.85; // Deve aparecer bool(true)
 echo "<br>";
 echo "59.85"; // Deve aparecer bool(true)
 echo "<br>";
 echo "59.85 é um número"; // Deve aparecer bool(false)
 
 echo "<br>"; // fim do exercício

/**
 * Exercício 007.3: De strings e floats para ints
 * 
 * É possível, e às vezes necessário, transformar valores em outros valores.
 * Para transformar strings e floats em ints, use a função intval()
 * Atribua um novo valor à $string.
 */

 $string = "5";
 echo var_dump($string); // Deve aparecer string(1) "5"
 echo "<br>";
 // use a função aqui

 echo var_dump($string); // Deve aparecer int(5)

?>

<p>
  <a href="https://www.w3schools.com/php/php_numbers.asp">Referência</a>
</p>