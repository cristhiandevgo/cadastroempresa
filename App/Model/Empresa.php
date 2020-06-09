<?php

class Empresa{
  private $id, $cnpj, $nomeEmpresarial, $nomeFantasia, $telefone, $cnae, $logradouro, $numero, $bairro, $cep, $estado, $cidade, $obs;

  public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id = $id;
  }

  public function getCnpj(){
    return $this->cnpj;
  }
  public function setCnpj($cnpj){
    $this->cnpj = $cnpj;
  }

  public function getNomeEmpresarial(){
    return $this->nomeEmpresarial;
  }
  public function setNomeEmpresarial($nomeEmpresarial){
    $this->nomeEmpresarial = $nomeEmpresarial;
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
  public function getCnae(){
    return $this->cnae;
  }
  public function setCnae($cnae){
    $this->cnae = $cnae;
  }

  public function getLogradouro(){
    return $this->logradouro;
  }
  public function setLogradouro($logradouro){
    $this->logradouro = $logradouro;
  }

  public function getNumero(){
    return $this->numero;
  }
  public function setNumero($numero){
    $this->numero = $numero;
  }

  public function getBairro(){
    return $this->bairro;
  }
  public function setBairro($bairro){
    $this->bairro = $bairro;
  }

  public function getCep(){
    return $this->cep;
  }
  public function setCep($cep){
    $this->cep = $cep;
  }

  public function getEstado(){
    return $this->estado;
  }
  public function setEstado($estado){
    $this->estado = $estado;
  }

  public function getCidade(){
    return $this->cidade;
  }
  public function setCidade($cidade){
    $this->cidade = $cidade;
  }

  public function getObs(){
    return $this->obs;
  }
  public function setObs($obs){
    $this->obs = $obs;
  }

}

 ?>
