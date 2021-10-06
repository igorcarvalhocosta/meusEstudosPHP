<?php
echo "EXEMPLOS DE LOOPS: FOR/WHILE/FOREACH" . PHP_EOL;
/**
*  for (valor inicial; condição; incremento/decremento) {
*    // Faça algo maneiro aqui
*}
*
*for ($i = 0; $i < 10; $i++) {
*    // Faça algo maneiro aqui
*}
*Primeiro parâmetro: índice inicial no qual você quer trabalhar.
*Segundo parâmetro: condição para que o laço seja finalizado.
*Terceiro parâmetro: incrementador/decrementador.
 */

echo "CONTANDO ATÉ 20 - EX1" . PHP_EOL;

$contador = 20;

for($i = 0; $i <= $contador; $i++){
    echo $i . " - ";
}
echo "SCRIPT FINALIZADO!" . PHP_EOL;

echo "TABUADA DE 3 - EX2" . PHP_EOL;

$multiplicador = 3;

for($i = 1; $i <= 10; $i++){
    echo $i . "x" . $multiplicador . "=" . ($multiplicador*$i) . PHP_EOL;
}
  echo "SCRIPT FINALIZADO!" . PHP_EOL;

 echo "CONTANDO ATÉ 20 C/ WHILE - EX1" . PHP_EOL;

 $condiçãoLoop = true;
 $i = 1; //número inicial

 while ($condiçãoLoop){
     echo " - " . $i;
     if ($i == 20){
         $condiçãoLoop = false; //caso chegue a 20 o valor 1 vai para 0
     }
     $i++; //caso seja true, incrementa e volta o loop
     
 }
 echo PHP_EOL . "SCRIPT FINALIZADO";

 echo PHP_EOL . "EXEMPLOS COM FOREACH" . PHP_EOL;


 $names = ["waasleey", "leozin044", "rychillie", "jpbrabo"];
 // Iteração sem a indíce
 foreach($names as $name){
     echo $name . " ";
 }
 // Retorno: waasley leozin044 rychillie jpbrabo
 
 // Iteração com a indíce
 foreach($names as $key => $name){
     echo $key . "." . $name . " ";
 }
 // Retorno: 0.waasley 1.leozin044 2.rychillie 3.jpbrabo

 echo "Exemplo #1 Iterando um objeto:" . PHP_EOL;

 $pessoa = new StdClass;
$pessoa->nome = "danielhe4rt";
$pessoa->idade = 21;
$pessoa->trabalho = "Fullstack Developer";

foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}
// Resultado:
// nome: danielhe4rt
// idade: 21
// trabalho: Fullstack Developer

echo "Exemplo #2 Iterando um objeto com chaves e valores:" . PHP_EOL;

$pessoa = [
    "nome" => "danielhe4rt",
    "idade" => 21,
    "trabalho" => "Fullstack Developer"
];
foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}

// Resultado:
// nome: danielhe4rt
// idade: 21
// trabalho: Fullstack Developer

echo "Exemplo #3 Iterando um objeto com chaves e valores:" . PHP_EOL;

$pessoa = [
    "danielhe4rt",
    21,
    "Fullstack Developer"
];
foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}

// Resultado:
// 0: danielhe4rt
// 1: 21
// 2: Fullstack Developer

echo "Exemplo #4 Iterando um objeto com chaves e valores:" . PHP_EOL;

$pessoa = [
    "danielhe4rt",
    21,
    "Fullstack Developer"
];
foreach ($pessoa as $valor) {
    echo "$valor" . PHP_EOL;
}

// Resultado:
// danielhe4rt
// 21
// Fullstack Developer

echo "Controlando suas reptições:" . PHP_EOL;

/**
*Bom, agora que entendemos sobre loops, podemos encontrar 
*algumas situações, onde queremos controlar o fluxo de interação. 
*Seja pulando uma interação especifica, ou simplesmente interromper
* sua execução. Para estes casos temos o continue e o break.
 */



