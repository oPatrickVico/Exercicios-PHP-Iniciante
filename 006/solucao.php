<?php
/**
 * Exercício 006.1: Tamanho de strings
 * 
 * Ecoe a string, seguida de seu tamanho.
 * O tamanho deve ser 27
 * Utilize a função strlen.
 */

 $string = "Eu sou uma string, hahaha: ";
 echo $string, strlen($string); 

echo "<br>"; // fim do exercício

/**
 * Exercício 006.2: Contando palavras
 * 
 * Ecoe a string, seguida do número de palavras.
 * O número de palavras deve ser 5
 * Utilize a função str_word_count().
 */

 $string = "Eu sou outra string, hehehe: ";
 echo $string, str_word_count($string); 

echo "<br>"; // fim do exercício

/**
 * Exercício 006.3: Invertendo strings
 * 
 * Ecoe a string, seguida de seu inverso.
 * O inverso é: ":ihihih ,uos ue ,artnoc oD"
 * Utilize a função strrev.
 */

 $string = "Do contra, eu sou, hihihi: ";
 echo $string, strrev($string);

echo "<br>"; // fim do exercício

/**
 * Exercício 006.4: Procurando por um texto
 * 
 * Ecoe a string, seguida da posição de "hohoho".
 * A posição deve ser: 22
 * Utilize a função strpos().
 */

 $string = "O que está buscando, hohoho? ";
 echo $string, strpos($string, "hohoho");

echo "<br>"; // fim do exercício

/**
 * Exercício 006.5: Substituindo texto
 * 
 * Ecoe a string. Em seguida, substitua "lol:"
 * por "huhuhu"
 * A string final devel ser: "Eu estou aqui, huhuhu" (sem os dois pontos)
 * Utilize a função str_replace().
 */

 $string = "Eu estou aqui, lol: ";
 echo $string, str_replace("lol:", "huhuhu", $string);

?>

<p>
  <a href="https://www.w3schools.com/php/php_string.asp">Referência</a>
</p>