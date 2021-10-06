<?php

//Unnião de arrays (+)

$array1 = ["name" => "Igor","Sobrenome"=>"Carvalho","DadName"=>"Severino","MomName"=>"Isabela"];
$array2 = ["Wife" => "Sarah"];
$eol.= PHP_EOL;
print_r($array1 + $array2) . $eol;

/**
 * Retorno:
 *     [name] => Igor
 *   [Sobrenome] => Carvalho
 *   [DadName] => Severino
 *   [MomName] => Isabela
 *   [Wife] => Sarah
 */

 //IGUALDADE ==

 $array1 = [0 => 1];
$array2 = [0 => 1];

echo $array1 == $array2;

//Retorna: 1, significa que os valores dos arrays são iguais

//DIFERENÇA != OU <>
 
$array1 = [0 => 1];
$array2 = [0 => 2];

echo $array1 != $array2;

//Retorna: 1, significa que os valores dos arrays são diferentes

//IDÊNTICO ===

$array1 = [0 => 1];
$array2 = [0 => 1];

echo $array1 === $array2;

//Retorna: 1, significa que os valores dos arrays são iguais e do mesmo tipo (número inteiro)

//NÃO IDÊNTICO !== 

$array1 = [0 => 1];
$array2 = [0 => '1'];

echo $array1 !== $array2;

//Retorna: 1, significa que os valores dos arrays não são iguais e/ou não são do mesmo tipo (número inteiro)

//ESCREVENDO UM ARRAY ANTES DO PHP 5.4


$array1 = array(0 => 'PHPBA', '1' => 'PHPSP', 2 => 'PHPSE');

print_r($array1);

/**
*Retorna:
*Array
*(
*   [0] => PHPBA
*   [1] => PHPSP
*   [2] => PHPSE
*)
**/
