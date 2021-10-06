<?php
echo "NAMESPACE EXEMPLOS:" . PHP_EOL;


namespace Controllers;

class IndexController
{
    //aqui vai o conteúdo/definição da classe
}

// SUB-NAMESPACE EXEMPLOS


namespace Controllers\Admin;

class AdminController
{
    //aqui vai o conteúdo/definição da classe
}

//Importando códigos com a instrução use


namespace Controllers;

use Symfony\Component\Console\Input\{InputInterface, InputOption};
use Symfony\Component\Console\Output\OutputInterface;
use Zend\Twitter;

//Exemplo de uso de alias em namespaces:



namespace Controllers;

use Zend\Twitter as Twit;


