<?php
// E &&, and, lembrando que é sempre melhor usar as singlas do que os nomes.
// Sempre será verdadeiro (true), se ambos os valores forem verdadeiros.

$a = true;
$b = false;
$c = true;

var_dump($a && $b && $c);
//Retorna como bool false pois a variável $b é falsa.
var_dump($a && $c);
//Retorna como bool true pois ambos são verdadeiros.

//OU or, ||
// também chamado de OU inclusivo pois só retornará true caso um ou ambos dos valores forem verdadeiros.

$a = false;
$b = true;
$c = true;
$d = false;
echo "apenas pra dividir" . PHP_EOL;
var_dump($a || $b);
// Um dos valores é true por isso o retorno é true
var_dump($b || $c);
//Ambos são verdadeiros por isso o retorno é true
var_dump($d || $a);
//Ambos são falsos por isso o retorno é falso

//XOR ^, xor.
//Conhecido como OU Exclusivo, retorna como true apenas quando um dos valores for verdadeiro
// Caso ambos sejam verdadeiros retorna false.

echo "apenas para dividir" . PHP_EOL;

$a = true;
$b = true;
$c = false;
$d = false;

var_dump($a ^ $b);
//O retorno será false pois ambos os valores vão ser verdadeiros.
var_dump($b ^ $c);
// O retorno será true pois o um dos valores é verdadeiro.
var_dump($c ^ $d);
//O retorno será false pois ambos são falsos.

echo "apenas para dividir" . PHP_EOL;

//NÃO !,not

$a = false;
$b = true;
var_dump(!$a);
// O retorno será verdadeiro pois negamos uma variável negativa.
var_dump(!$b);
//O retorno será falso pois negamos uma variavel verdadeira.

//OBS: Os simbolos utilizados pas representar os operadores lógicos, são avaliados primeiro que as próprias palavras.