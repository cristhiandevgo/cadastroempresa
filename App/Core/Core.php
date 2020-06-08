<?php

class Core{
  public function iniciar($url){
    if(!isset($url["pagina"])){
      $pagina = "home";
    }else{
      $pagina = $url["pagina"];
    }

    if(!isset($url["acao"])){
      $acao = "iniciar";
    }else{
      $acao = $url["acao"];
    }

    $pagina = ucfirst($url["pagina"]);
    $classe = $pagina."Controller";

    if(!class_exists($classe)){
      $classe = "ErroController";
    }

    if(!method_exists($classe, $acao)){
      $acao = "iniciar";
    }



    call_user_func_array(array(new $classe, $acao), array());

  }
}


 ?>
