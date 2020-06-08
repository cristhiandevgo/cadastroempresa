<?php

abstract class Connection{
  private static $conn;

  public static function getConn(){
    if(!isset(self::$conn)){
      self::$conn = new PDO("mysql:host=localhost;dbname=cadastroempresa;charset=utf8", "root", "");
    }

    return self::$conn;
  }
}


 ?>
