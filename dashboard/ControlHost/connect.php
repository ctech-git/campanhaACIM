<?php
// começar ou retomar uma sessão
// define('HOST', 'localhost');
define('HOST', '162.241.2.87');
// define('HOST', '162.241.2.87');
define('USUARIO', 'port5718_root');
define('SENHA','damasco2019');
define('DB', 'port5718_sorte_esportiva');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die('Nao foi possivel conectar');
