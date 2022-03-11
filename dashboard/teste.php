<?php

// $url = 'https://sorteesportiva.net/usuarios/gerente/caixacolaboradores.aspx';
// $contents = htmlentities(file_get_contents($url));
// echo $contents;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');


$ch = curl_init('https://sorteesportiva.net/login.aspx');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// get headers too with this line
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_COOKIE, 'ASP.NET_SessionId_guid=233add34-764b-4643-a608-89052b920881');
curl_setopt($ch, CURLOPT_COOKIE, 'ASP.NET_SessionId=2en5bi3hd1hkylc3yhf4f3at');


$result = curl_exec($ch);
var_dump($result)
// get cookie
// multi-cookie variant contributed by @Combuster in comments
// preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
// $cookies = array();
// foreach($matches[1] as $item) {
//     parse_str($item, $cookie);
//     $cookies = array_merge($cookies, $cookie);
// }
// var_dump($cookies);
?>
