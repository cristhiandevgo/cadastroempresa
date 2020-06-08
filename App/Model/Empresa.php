<?php

class Empresa{
  private $cnpj, $razaoSocial, $nomeFantasia, $telefone, $obs;

  public function getCnpj(){
    return $this->cnpj;
  }
  public function setCnpj($cnpj){
    $this->cnpj = $cnpj;
  }

  public function getRazaoSocial(){
    return $this->razaoSocial;
  }
  public function setRazaoSocial($razaoSocial){
    $this->razaoSocial = $razaoSocial;
  }

  public function getNomeFantasia(){
    return $this->nomeFantasia;
  }
  public function setNomeFantasia($nomeFantasia){
    $this->nomeFantasia = $nomeFantasia;
  }

  public function getTelefone(){
    return $this->telefone;
  }
  public function setTelefone($telefone){
    $this->telefone = $telefone;
  }

  public function getObs(){
    return $this->obs;
  }
  public function setObs($obs){
    $this->obs = $obs;
  }

}

 ?>
