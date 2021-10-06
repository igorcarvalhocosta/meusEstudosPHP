<?php
//Mostrando o case sensitive
$He4rt = 'Eu ';
$he4rt = 'amo ';
$he4rT = 'a He4rt ';
$HE4RT = 'Developers';
echo $He4rt . $he4rt . $he4rT . $HE4RT . PHP_EOL;
/** 
 * Esse exemplo mostra que as variáveis possuem case-sensitives
 * isso significa que se a nomenclatura da variável estiver escrita com 
 * alguma letra maiúscula ou minúscula, deve-se escrever com o mesmo padrão
 * senão vc vai obter um erro e pode demorar horas para resolver apenas um caracter!
 */ 
$name = 'Igor Carvalho Costa!';
$age = 20;
/**
 * Lembrando que as variáveis são conteúdos que podem ser 
 * modificados a qualquer momento, ser uma string, int, bool, e etc, são sempre representadas pelo cifrão($).
 */

echo"Eu me chamo " . $name . PHP_EOL;
// usando uma constante

define( 'idade', '20 anos');
echo " E tenho " . idade . PHP_EOL;

//usando vetores com print_r ou var_dump exemplo:
$nomes = ['claudia','igor','13 anos','14 mensagens'];
print_r($nomes)
var_dump($nomes)
echo "Eu me chamo claudia e tenho " . $nomes[2];




?>



