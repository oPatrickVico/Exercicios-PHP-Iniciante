<?php
/**
 * Exercício 009.1: Constantes não mudam
 * 
 * É possível definir valores imutáveis, que podem 
 * ser acessados dentro e fora de funções.
 * 
 * Para criar uma constante, utilize a função:
 *      define(nome, valor)
 * onde nome e valor são string que representam 
 * exatamente o que dizem ser.
 * 
 * Constantes não usam o $.
 * 
 * Crie uma constante chamada fruta, com o valor morango.
 */

 // Definição da constante
  define("fruta", "morango");
 // Ecoe seu valor
  echo fruta;

  echo "<br><br>"; // fim de exercícío

/**
 * Exercício 009.2: Em todos escopos
 * 
 * Defina a constante carro, com seu valor sendo ferrari
 * sem modificar a função qualCarroE
*/

// Definição da constante
define("carro", "ferrari");

function qualCarroE() {
  echo carro;
}

qualCarroE()
?>

<p>
  <a href="https://www.w3schools.com/php/php_constants.asp">Referência
  </a>
</p>