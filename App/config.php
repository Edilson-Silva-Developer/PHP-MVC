<?php


//Caminhos de diretorio


//$teste = dirname(__FILE__);

//echo $teste;

define('BASEDIR', dirname(__FILE__) .  '/../');

define('VIEWS', dirname(__FILE__) . '/View/modules/');




//Dados de conexão ao Banco de Dandos.
$_ENV['db']['host'] = 'localhost:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = '@mysql_2022';
$_ENV['db']['database'] = 'db_mvc';