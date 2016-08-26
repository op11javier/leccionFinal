<?php 
class conexion extends PDO
{
 
 //nombre base de datos
 private $dbname = "becasdb";
 //nombre servidor
 private $host = "localhost";
 //nombre usuarios base de datos
 private $user = "postgres";
 //password usuario
 private $pass = "postgres";
 //puerto postgreSql
 private $port = "5432";
 private $dbh;
 
 public function __construct() 
 {
     try {
 
         $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");
 
     } catch(PDOException $e) {
 
         echo  $e->getMessage(); 
 
     }
 
 }
 
 public function close_con() 
 {
 
     $this->dbh = null; 
 
 }
 
}
