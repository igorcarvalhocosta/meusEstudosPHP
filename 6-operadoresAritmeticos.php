<?php

$anoAtual = date('Y');
$minhaIdade = 20;
// date( Y-m-d H-i-s); tag usada para informar data atual, ano/mes/dia hora/minutos/segundos
echo "Eu nasci no ano de " . ($anoAtual - $minhaIdade) . PHP_EOL;
