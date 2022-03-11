<?php
// começar ou retomar uma sessão
// define('HOST', 'localhost');
define('HOST', '162.241.2.87');
define('USUARIO', 'port5718_root');
define('SENHA','damasco2019');
define('DB', 'port5718_ACIM');

$opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
$conexao = new PDO("mysql:host=".HOST."; dbname=".DB, USUARIO, SENHA, $opcoes);