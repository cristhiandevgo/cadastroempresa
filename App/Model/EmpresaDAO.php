<?php

class EmpresaDAO{
  public function create(Empresa $e){
    $sql = "INSERT INTO Empresa (nomeEmpresarial, nomeFantasia, telefone, cnae, cnpj, logradouro, numero, bairro, cep, estado, cidade, obs) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = Connection::getConn()->prepare($sql);
    $stmt->bindValue(1, $e->getNomeEmpresarial());
    $stmt->bindValue(2, $e->getNomeFantasia());
    $stmt->bindValue(3, $e->getTelefone());
    $stmt->bindValue(4, $e->getCnae());
    $stmt->bindValue(5, $e->getCnpj());
    $stmt->bindValue(6, $e->getLogradouro());
    $stmt->bindValue(7, $e->getNumero());
    $stmt->bindValue(8, $e->getBairro());
    $stmt->bindValue(9, $e->getCep());
    $stmt->bindValue(10, $e->getEstado());
    $stmt->bindValue(11, $e->getCidade());
    $stmt->bindValue(12, $e->getObs());
    $stmt->execute();
  }

  public function read(){
    $sql = "SELECT * FROM Empresa";
    $stmt = Connection::getConn()->prepare($sql);
    $stmt->execute();

    $resultado = array();

    while ($row = $stmt->fetchObject("EmpresaDAO")) {
      $resultado[] = $row;
    }

    return $resultado;
  }

  public static function readById($id){
    $sql = "SELECT * FROM Empresa WHERE idEmpresa=?";
    $stmt = Connection::getConn()->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();

    $resultado = array();

    $resultado = $stmt->fetchObject("EmpresaDAO");

    if(!$resultado){
        throw new Exception("Nenhuma empresa cadastrada!", 0);
    }

    return $resultado;

  }


  public function update(Empresa $e){
    $sql = "UPDATE Empresa SET nomeEmpresarial=?, nomeFantasia=?, telefone=?, cnae=?, cnpj=?, logradouro=?, numero=?, bairro=?, cep=?, estado=?, cidade=?, obs=? WHERE idEmpresa=?";
    $stmt = Connection::getConn()->prepare($sql);
    $stmt->bindValue(1, $e->getNomeEmpresarial());
    $stmt->bindValue(2, $e->getNomeFantasia());
    $stmt->bindValue(3, $e->getTelefone());
    $stmt->bindValue(4, $e->getCnae());
    $stmt->bindValue(5, $e->getCnpj());
    $stmt->bindValue(6, $e->getLogradouro());
    $stmt->bindValue(7, $e->getNumero());
    $stmt->bindValue(8, $e->getBairro());
    $stmt->bindValue(9, $e->getCep());
    $stmt->bindValue(10, $e->getEstado());
    $stmt->bindValue(11, $e->getCidade());
    $stmt->bindValue(12, $e->getObs());
    $stmt->bindValue(13, $e->getId());
    $stmt->execute();
  }

  public function delete($id){
    $sql = "DELETE FROM Empresa WHERE idEmpresa=?";
    $stmt = Connection::getConn()->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
  }



}

 ?>
