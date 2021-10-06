<?php

//Concatenação (.)
$automovel = "carro ";
$corautomovel = "branco";
echo "Eu quero comprar um " . $automovel . $corautomovel . ", por isso estou estudando PHP!" . PHP_EOL;
//Eu quero comprar um carro branco, por isso estou estudando PHP!

//CONCATENANDO DE FORMA ABREVIADA .=
$jogoFav= "Meu jogo favorito é o ";
$jogoFav.= "LOL,";
$jogoFav.= "por isso estou trabalhando muito para comprar";
$jogoFav.= PHP_EOL;

echo $jogoFav;
// Junto a isso também temos as concatenações de variáveis ex: echo $php . $codigo;