<?php

echo "Exemplos de Operadores Bitwise (bit a bit)" . PHP_EOL;

/**
 *  E &
 * OU |
 * OU exclusivo ^
 * Não ~
 * Deslocar à esquerda <<
 * Deslocar à direita >>
 */

// Operadores E &, exemplos:
echo 9 & 7;

// 9 em binário é: 00001001
// 7 em binário é: 00000111
// resultado:      00000001

//Retorna: "1" que é o binário 00000001 

// Exemplo de Operador Ou |

echo 9 | 7;

// 9 em binário é: 00001001
// 7 em binário é: 00000111
// resultado:      00001111

//Retorna: "15" que é o binário 00001111 

// Exemplos de Operador Não ~ , papel de inverter os números binários, o que é 1 passa a ser 0 e vice versa!
$a = -9;
$a = ~$a;

echo $a;

//diferente dos outros exemplos aqui representamos o valor com 20 bits
// -9 em binário é:                 11111111111111110111
// após a operação o é resultado:   00000000000000001000
//Retorna: "8" que é o binário 00000000000000001000

// Operador Deslocar à esquerda <<,  
//Ou seja, $a << 7, é o mesmo que multiplicar $a por 2 sete vezes.
$a = 9;
$b = 7;
echo $a << $b;

//Retorna: "1152" que é o resultado de 9*2*2*2*2*2*2*2

//Operador Deslocar à Direita >>
//Ou seja, $a << 7, é o mesmo que dividir $a por 2 sete vezes.
$a = 9;
$b = 7;
echo $a >> $b;

//Retorna: "0" que é o resultado de 9/2/2/2/2/2/2/2
//Se você fizer a operação acima na calculadora o resultado vai ser igual a 0.0703125
//o PHP retorna o valor inteiro nesta operação

//Notas 

//   Bit é a menor unidade de informação na computação e pode ser 0 (zero) ou 1 (um), ligado ou desligado;
//  Um byte tem 8 bits;
//  Nao se preocupe com os operadores bit a bit por hora, basta que você conheça eles;










