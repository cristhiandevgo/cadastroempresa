<?php

class Endereco{
  private $logradouro, $numero, $bairro, $cep, $cidade, $estado;

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

  public function getCep(){
    return $this->cep;
  }
  public function setCep($cep){
    $this->cep = $cep;
  }

  public function getCidade(){
    return $this->cidade;
  }
  public function setCidade($cidade){
    $this->cidade = $cidade;
  }

  public function getEstado(){
    return $this->estado;
  }
  public function setEstado($estado){
    $this->estado = $estado;
  }

}

 ?>
