<?php

// Operadores de atribuição
//Uma atribuição é uma maneira de guardar um valor na memória e referenciá-lo com um identificador, 
//por exemplo: uma variável ou uma constante.
//O operador básico de atribuição no PHP é =, não pense nele como "igual a", pense como "recebe o 
//valor de". Então $a = 3; significa que a variável $a recebe o valor 3.

//Exemplo de operador de atribuição:
$resultado = 10;

echo $resultado . PHP_EOL;
//Retorna: "10"

// Na atribuição temos também as formas de se abreviar: +,-,*,/,%, etc.

//exemplos:
//soma
$resultado = 10;
$resultado +=10;

echo $resultado . PHP_EOL;

//Retorna: "20"

//subtração

$valor = 5;
$valor -= 3;

echo $valor . PHP_EOL;
// Retorna: "2"

//Multiplicação

$valor1 = 10;
$valor1 *= 2;

echo $valor1 . PHP_EOL;
// Retorna "20"

$valor2 = 10;
$valor2 /= 2;
echo $valor2 . PHP_EOL;
//Retorna "5"

//Módulo, retorna o resto da divisão.

$valor3 = 30;
$valor3 %= 3;
echo $valor3 . PHP_EOL;
// Retorna "0".

//Operador de incremento 

$valor4 = 2;
$valor4++;
echo $valor4 . PHP_EOL;
echo $valor4++ . PHP_EOL;
echo ++$valor4 . PHP_EOL;
//Retornar um incremento de 1 que vai retornar "3", e colocando antes ou depois o incremento ou até mesmos
// o decremento na tag echo, só irá ser somado ou subtraído caso coloque antes o ++ ou --, 
// pois colocando após a variável nao funciona pois a variável será exibida antes da alteração.

// Operador de Decremento

$valor5 = 10;
$valor5--;
echo $valor5 . PHP_EOL;
echo $valor5-- . PHP_EOL;
echo --$valor5 . PHP_EOL;
// Observando que o ultimo echo colocado sempre subtrai sobre o ultimo
// valor mesmo que não seja exibido no ultimo penultimo echo!

