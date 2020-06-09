<?php

class EmpresaController{

  public function iniciar(){
    try {
      $empresa = EmpresaDAO::read();

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

  public function cadastrar(){
    if($_POST){
      $empresa = new Empresa();
      $empresa->setNomeEmpresarial($_POST["nomeEmpresarial"]);
      $empresa->setNomeFantasia($_POST["nomeFantasia"]);
      $empresa->setTelefone($_POST["telefone"]);
      $empresa->setCnae($_POST["cnae"]);
      $empresa->setCnpj($_POST["cnpj"]);
      $empresa->setLogradouro($_POST["logradouro"]);
      $empresa->setNumero($_POST["numero"]);
      $empresa->setBairro($_POST["bairro"]);
      $empresa->setCep($_POST["cep"]);
      $empresa->setEstado($_POST["estado"]);
      $empresa->setCidade($_POST["cidade"]);
      if(!isset($_POST["obsTexto"])){
        $obs = "";
      }else{
        $obs = $_POST["obsTexto"];
      }
      $empresa->setObs($obs);
      $empresaDao = new EmpresaDAO();
      $empresaDao->create($empresa);
      echo "<script>alert('Cadastro Realizado com Sucesso!');location.href='index.php?pagina=empresa';</script>";
    }else{
      echo "<script>alert('Erro no cadastro!');location.href='index.php?pagina=empresa&acao=formularioCadastro';</script>";
    }

  }

  public function formularioAtualizacao(){
    $id = $_GET["id"];
    try{
      $empresa = EmpresaDAO::readById($id);
      $loader = new \Twig\Loader\FilesystemLoader('App/View');
      $twig = new \Twig\Environment($loader, []);
      $template = $twig->load('AtualizacaoEmpresa.html');

      $resultado = array();
      $resultado["empresa"] = $empresa;

      $conteudo = $template->render($resultado);
      echo $conteudo;
    } catch (\Exception $e){
      echo $e->getMessage();
    }
  }

  public function atualizar(){
    if($_POST){
      $empresa = new Empresa();
      $empresa->setId($_POST["idEmpresa"]);
      $empresa->setNomeEmpresarial($_POST["nomeEmpresarial"]);
      $empresa->setNomeFantasia($_POST["nomeFantasia"]);
      $empresa->setTelefone($_POST["telefone"]);
      $empresa->setCnae($_POST["cnae"]);
      $empresa->setCnpj($_POST["cnpj"]);
      $empresa->setLogradouro($_POST["logradouro"]);
      $empresa->setNumero($_POST["numero"]);
      $empresa->setBairro($_POST["bairro"]);
      $empresa->setCep($_POST["cep"]);
      $empresa->setEstado($_POST["estado"]);
      $empresa->setCidade($_POST["cidade"]);
      if(!isset($_POST["obsTexto"])){
        $obs = "";
      }else{
        $obs = $_POST["obsTexto"];
      }
      $empresa->setObs($obs);
      $empresaDao = new EmpresaDAO();
      $empresaDao->update($empresa);

      echo "<script>alert('Alteração realizada com Sucesso!');location.href='index.php?pagina=empresa';</script>";
    }else{
      echo "<script>alert('Erro na alteração!');location.href='index.php?pagina=empresa&acao=formularioCadastro';</script>";
    }

  }

  public function deletar($id){
    $empresaDao = new EmpresaDAO();
    $empresaDao->delete($id);
    echo "<script>alert('Empresa excluída com Sucesso!');location.href='index.php?pagina=empresa';</script>";
  }



}


 ?>
