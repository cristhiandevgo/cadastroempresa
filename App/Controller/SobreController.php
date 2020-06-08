<?php

class SobreController{
  public function iniciar(){
    try {
      $loader = new \Twig\Loader\FilesystemLoader('App/View');
      $twig = new \Twig\Environment($loader, []);
      $template = $twig->load(ucfirst("Sobre.html"));

      $parametros = array();
      $parametros["sobre"] = "Sistema de Cadastro de Empresas";

      $templateFinal = $template->render($parametros);
      echo $templateFinal;

    } catch (\Exception $e) {
      echo $e->getMessage();
    }

  }
}

 ?>
