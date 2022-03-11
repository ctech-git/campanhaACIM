<?php


$nome  = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$telefone  = (isset($_POST['telefone'])) ? $_POST['telefone'] : '';

$mensagem = rawurlencode("Olá ".$nome."❤️, você é aquela pessoa que divide as conquistas e multiplica as alegrias! ");
$mensagem .= "%0a";
$mensagem .= rawurlencode("Em nome da *SORTE ESPORTIVA* 🍀, desejamos que tenha um dia muito feliz, com boas surpresas, sinceros parabéns, muitas felicidades, saúde e paz em toda a sua vida. É um prazer e uma satisfação ter você em nosso time de clientes! Aproveite cada instante do seu dia! Grande abraço!🎊💚");
$mensagem .= "%0a";

$url = "https://wa.me/55".$telefone."?text=".$mensagem;//10%2F11%2F2020

echo $url;
