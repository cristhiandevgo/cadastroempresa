<?php

class EmpresaController{

  public function iniciar(){
    try {
      $empresa = new EmpresaDAO();

      $loader = new \Twig\Loader\FilesystemLoader('App/View');
      $twig = new \Twig\Environment($loader, []);
      $template = $twig->load("Empresa.html");

      $parametros = array();
      $parametros["empresa"] = $empresa;

      $templateFinal = $template->render($parametros);
      echo $templateFinal;

    } catch (\Exception $e) {
      echo $e->getMessage();
    }

  }

  public function formularioCadastro(){
    try {
      $loader = new \Twig\Loader\FilesystemLoader('App/View');
      $twig = new \Twig\Environment($loader, []);
      $template = $twig->load(ucfirst("FormularioCadastro.html"));

      $templateFinal = $template->render();
      echo $templateFinal;

    } catch (\Exception $e) {
      echo $e->getMessage();
    }

  }
}


 ?>
