<?php

require_once "App/Core/Core.php";

require_once "App/Model/Connection.php";
require_once "App/Model/Empresa.php";
require_once "App/Model/Endereco.php";
require_once "App/Model/EmpresaDAO.php";

require_once "App/Controller/EmpresaController.php";
require_once "App/Controller/ErroController.php";
require_once "App/Controller/SobreController.php";
require_once "App/Controller/ErroController.php";
require_once "App/Controller/HomeController.php";
require_once "vendor/autoload.php";



$estrutura = file_get_contents("App/View/Estrutura.html");

ob_start();
$core = new Core();
$core->iniciar($_GET);
$dados = ob_get_contents();
ob_end_clean();

$empresa = new EmpresaDAO();
$empresa->read();

$estruturaFinal = str_replace("{{conteudo}}", $dados, $estrutura);

echo $estruturaFinal;


 ?>
