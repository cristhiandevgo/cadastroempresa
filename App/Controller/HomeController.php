<?php

class HomeController{
  public function iniciar(){
    try {
      $loader = new \Twig\Loader\FilesystemLoader('App/View');
      $twig = new \Twig\Environment($loader, []);
      $template = $twig->load(ucfirst("Home.html"));

      $parametros = array();
      $parametros["home"] = "Seja Bem-Vindo(a)!";

      $templateFinal = $template->render($parametros);
      echo $templateFinal;

    } catch (\Exception $e) {
      echo $e->getMessage();
    }

  }
}

 ?>
