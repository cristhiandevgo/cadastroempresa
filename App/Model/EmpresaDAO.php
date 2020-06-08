<?php

class EmpresaDAO{
  public function create(){

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

  public function update(){

  }

  public function delete(){

  }

}

 ?>
