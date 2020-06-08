<?php

$cnpj = $_GET["cnpj"];
$url = "https://www.receitaws.com.br/v1/cnpj/".$cnpj;

$resposta = file_get_contents($url);

echo $resposta;

 ?>
