<?php
class Database
{
  public static function Conectar()
    {
       $host ='localhost';
       $usuario ='root';
       $pass ='';
       $bbdd ='tecnobd';
        $pdo = new PDO("mysql:host=$host;dbname=$bbdd;charset=utf8;port=3306",$usuario,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        return $pdo;
    }
}
?>