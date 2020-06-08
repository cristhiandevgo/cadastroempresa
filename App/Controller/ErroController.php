<?php

class ErroController{
  public function iniciar(){
    try {
      $loader = new \Twig\Loader\FilesystemLoader('App/View');
      $twig = new \Twig\Environment($loader, []);
      $template = $twig->load(ucfirst("Erro.html"));

      $parametros = array();
      $parametros["erro"] = "Essa página não existe!";

      $templateFinal = $template->render($parametros);
      echo $templateFinal;

    } catch (\Exception $e) {
      echo $e->getMessage();
    }

  }
}

 ?>
