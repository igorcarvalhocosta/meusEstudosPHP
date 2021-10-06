<?php
// Comparação de valores
/**
 * true é o mesmo que verdadeiro e false é falso;
 * 1 é o mesmo que true e 0 é o mesmo que false;
 * O operador igual duplo (==) compara dois valores e retorna true(1)
 * caso os dados forem iguais ou retornará false (0) caso seja valores diferentes!
 */
//IGUALDADE ==
echo (0 == false) . PHP_EOL; //true
echo ('123' == 123) . PHP_EOL; //true
echo ('um' == 1) . PHP_EOL; //false
echo (123.0 == 123) . PHP_EOL; //true

// Observação: caso queira identificar com exatidão se o tipo dos valores são iguais, 
// basta colocar 3 sinais de igual (===) logo irá retornar true (1) se forem exatamente iguais, ou false (0)
// caso sejam de diferentes tipos!

var_dump(123.0); 
var_dump(123);

/**
*retorna: 1
*         1         
*         1
**/

//DIFERENÇA !=
// Na diferença (!=) vc pode comparar os valores e verificar se são diferentes um do outro
// caso sejam diferentes o retorno será true(1), caso sejam iguai o retorno será false(0).

echo (0 != false) . PHP_EOL; //false
echo ('123' != 123) . PHP_EOL; //false
echo ('um' != 1) . PHP_EOL; //true
echo (123.0 != 123) . PHP_EOL; //false

/**
*retorna:  
*         
*         1
*        
**/

//IDÊNTICO ===

//Sendo citado, o php pode testar se um valor é igual e do mesmo tipo.
//Sendo chamado de valor IDÊNTICO.

echo (0 === false) . PHP_EOL; //false
echo ('123' === 123) . PHP_EOL; //false
echo ('um' === 1) . PHP_EOL; //false
echo (123.0 === 123) . PHP_EOL; //false

//É tudo falso :(, por isso não retorna nada
//caso algum valor fosse idêntico iria retornar em 1 (true)

//NÃO IDÊNTICO !==
// usado para testar se o valor NÃO É IDÊNTICO, sempre verificando o tipo do valor.

echo (0 !== false) . PHP_EOL; //true
echo ('123' !== 123) . PHP_EOL; //true
echo ('um' !== 1) . PHP_EOL; //true
echo (123.0 !== 123) . PHP_EOL; //true

/**
*retorna: 1 
*         1
*         1
*         1
*OBS: caso algo fosse idêntico o valor seria 0 (false)
**/

//MAIOR/MENOR QUE:
/**
 * < menor que;
 * > maior que;
 * <= menor ou igual a;
 * >= maior ou igual a;
 */
echo (2 < 3) . PHP_EOL; //true
echo (2 > 3) . PHP_EOL; //false
echo (2 <= 3) . PHP_EOL; //true
echo (2 >= 3) . PHP_EOL; //false


/**
*retorna: 1 
*       
*         1
*         
**/

echo (2 < 1.9) . PHP_EOL; //false
echo (4 > 3.6) . PHP_EOL; //true
echo (1001 <=1001.1) . PHP_EOL;//true
echo (2034 >= 2002) . PHP_EOL;//true

/**
 * Retorno:
 * 0
 * 1
 * 1
 * 1
 */






