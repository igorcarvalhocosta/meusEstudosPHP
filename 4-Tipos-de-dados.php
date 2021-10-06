<?php
echo "Exemplos de números boleanos" . PHP_EOL;
var_dump(True);
var_dump(False);
var_dump(true);
var_dump(false);
var_dump(TrUe);
var_dump(fAlSe);

echo "Exemplos de números inteiros" . PHP_EOL;
var_dump(1234); // número decimal
var_dump(-123); // um número negativo
var_dump(0123); // número octal (equivalente a 83 em decimal)
var_dump(0x1A); // número hexadecimal (equivalente a 26 em decimal)
var_dump(0b11111111); // número binário (equivalente ao 255 decimal)

echo "Exemplos de números flutuantes" . PHP_EOL;
var_dump(1.2);
var_dump(1.987);
var_dump(1.2e3); 
var_dump(7E-10); 

echo "Exemplos de String" . PHP_EOL;
var_dump( "my name is igor carvalho");
var_dump( "melhor live");

echo "Exemplos de Vetores (arrays)" . PHP_EOL;

$vetor1 = [1,2,333,4,5,"vrau"];

var_dump( $vetor1);
var_dump( $vetor1[0]);
/**
 * 1 vetor ou array é composto por varias posições que vc pode preencher com 
 * algum conteúdo, lembrando que as variaveis são representadas pelo sinal do cifrão
 * "$", 
 */

 $vetorAssociativoPessoa = [
     "name" => "Igor",
     'city' => "Rio de Janeiro",
     "State" => "RJ",
     "Age" => 21
 ];
 var_dump($vetorAssociativoPessoa);
 var_dump( $vetorAssociativoPessoa ["name"]);
 var_dump($vetorAssociativoPessoa['city']);
 /**
  * Sempre lembrando em finalizar com ponto e virgula ou apenas virgula, os vetores podem ser mudados
  * sempre, em qualquer posição, basta indicar a nomenclarura da posiçao e o que vai preenche
  *, os vetores sempre se iniciam da posição [0],[1],[2], e etc.
  */






