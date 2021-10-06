<?php
//Estruturas de controle, condicionais: IF/ELSE.
//A condicional IF retorna sempre sinal verdadeiro, já a condicional ELSE retorna quando o sinal for falso.
//POR EXEMPLO:
//if (condition) {
    // condição verdadeira
    // faça algo
//} else {
    // condição falsa
//}
//OUTROS EXEMPLOS DE IF/ELSE:

echo "EXEMPLO 1" . PHP_EOL;
$idosos = 75;

   if ($idosos >= 65) {
    echo "O cidadão terá direito a gratuidade para qualquer meio de trasporte." . PHP_EOL;
   }
   else {
       echo "O cidadão terá que pagar a sua própria passagem sem ter direito a qualquer benefício." . PHP_EOL;

   }
   echo "EXEMPLO 2 - Condição entre dois parâmetros!" . PHP_EOL;
   $usuario = "igor carvalho";
   $senha = "igor7";

   if ($usuario === "igor carvalho" && $senha === "igor7") {
       echo "Seja Bem vindo IGOR!" . PHP_EOL;
   } else {
       echo "senha ou usuário incorreto" . PHP_EOL;
   }
// SE (if) os valores forem verdadeiros, sendo idênticos a variável, o acesso será liberado, caso não sejam idênticos
// retornará falso o valor, SENÃO (else) o acesso não será liberado!

//EXEMPLOS DE CONDIÇÃO: IF/ELSE IF/ ELSE
//if (first condition) {
    // condição verdadeira
//} else if(second condition) {
    // condição verdadeira
//} else if(third condition) {
    // condição verdadeira
//} else {
    // condição falsa
//}

echo "EXEMPLO 1 - IF/ELSE IF/ELSE" . PHP_EOL;

$usuario = "igorcosta";
$senha = "igor7";
$email = "igor@gmail.com";

if ($usuario === "igorlosta" && $senha ==="igor7") {
    echo "Seja bem vindo a sua nova conta!" . PHP_EOL;
} else if ($email === "igor@gmail.com" && $senha === "igor7"){
    echo "Seja Bem vindo a sua nova conta!" . PHP_EOL;
} else {
    echo "Não foi possível acessar a sua conta, verifique seus dados!" . PHP_EOL;
}
/**
 * Usamos duas condições verdadeiras e uma falsa, caso as duas condições não deem
 *  nenhum retorno verdadeiro, a mensagem da condição else será emitida.
 * Caso contrário necessita apenas de um retorno verdadeiro em uma das 
 * condiçoes que o retorno será verdadeiro.
 */


/**
 * EXEMPLOS CONDIÇÃO: SWITCH-CASE
 * 
 * switch (cond) {
*    case val1:
*        // faça algo
*        break;
*    case val2:
*        // faça algo
*        break;
*    case val3:
*        // faça algo
*        break;
*    defaut:
*        // faça algo quando nenhuma das opções for selecionada
*        break;
*}
*
 */
echo "EXEMPLO 1 - SWITCH-CASE" . PHP_EOL;

$born = "!dataDeNascimento";

 switch ($born) {
     case "!nome": 
        echo "Igor" . PHP_EOL;
        break;
     case "!dataDeNascimento":
        echo "20/04/2001" . PHP_EOL;
        break;
     case "!sobrenome" . PHP_EOL;
        echo "Carvalho";
        break;
     case "!idade":
        echo "20" . PHP_EOL;
        break;
     default:
        echo "Nada vai acontecer!" . PHP_EOL;
        break;
 }
 // switch case (caso isso), colocando a variável e o valor correto, o valor será emitido!

 /**
  * O match apróxima-se bastante do switch, em sua lógica. Onde ele pecorre as opções e 
  *retorna a primeira que é compativel com suas condicionais. As diferenças entre eles é 
  *sua sintaxe mais elegante e suas operações sempre, são acompanhadas pela comparação com os tipos (===).
  */

  /**
   * EXEMPLO DE MATCH 1:
   * $comando = "!he4rt";
*echo match($comando) {
 *   "!site" => "Link: https://heartdevs.com",
  *  "!he4rt", "!discord" => "Entre no nosso discord: https://discord.com/he4rt",
   * default => "nada acontece feijoada"
*}; // "Entre no nosso discord: https://discord.com/he4rt"
*/

/**
 * EXEMPLO DE MATCH 2:
 * 
 * echo match("heart devs") {
*    "!site" => "Link: https://heartdevs.com",
*    "!he4rt", "!discord" => "Entre no nosso discord: https://discord.com/he4rt",
*    default => "nada acontece feijoada"
*}; // "nada acontece feijoada"
*
 */

/**
 * EXEMPLO DE MATCH 3:
 * 
 * 
*$idade = 21;
*$result = match (true) {
*    $idade >= 65 => 'Idoso',
*    $idade >= 25 => 'Adulto',
*    $idade >= 18 => 'Jovem adulto',
*    default => 'Criança',
*};
*
*echo $result; // "Jovem Adulto"
*
 */

// CONDIÇÃO TERNÁRIO:
//Modelos de ternário
//condition ? case true : case false;

echo "EXEMPLO 1 DE CONDIÇÃO TERNÁRIO" . PHP_EOL;

$nome = "isabela"; 
// na variável que geralmente ficaria para as pessoas preencherem.
$dados = $nome == "isabela" ? "nome correto" : "nome incorreto";
// e entre o ternário que ficaria o nome a ser seguido.
echo $dados . PHP_EOL;

//CONDIÇÃO COALESCÊNCIA NULA:
//
/**
 * $descricaoPorCodigo = array(
*     1 => 'Este usuário já existe.',
*     2 => 'Senha incorreta.',
*     3 => 'Este usuário está bloqueado.',
* );

* // Exemplo utilizando operador ternário - Retorna 'Alguma coisa deu errado', pois a chave 5 não existe
* return isset($descricaoPorCodigo[5]) ? $descricaoPorCodigo[5] : 'Alguma coisa deu errado.';

* // A lógica acima pode ser simplicada utilizando o operador de coalescência nula
* return $descricaoPorCodigo[5] ?? 'Alguma coisa deu errado.';
* 
 */

 





