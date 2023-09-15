<?php
/**
 * Exercício 004.1: Definindo funções
 * 
 * Crie uma função que imprime "Olá, mundo" com um echo.
 */

 function OlaMundo () {
  echo "Olá, Mundo!";
 }

 OlaMundo();
?>
<br>
<?php
/**
 * Exercício 004.2: Passando paramentros à funções
 * 
 * Crie uma função chamada soma, que recebe x e y e os soma.
 * Imprima o total com um echo.
 */
function soma($x,$y) {
  echo $x+$y;
}

soma(2,2);
?>
