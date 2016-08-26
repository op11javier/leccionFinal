<?php
class becario {  
   private $idBecario;  
   private $nombre;  

   function __construct() {  
    

   }  
   
   /*
   function __clone() {  
     $this->id_demo = ++$this->id_demo;   
   } */


 
   public function getidBecario() {  
     return $this->idBecario;  
   }  
   public function setidBecario($idBecario) {  
     $this->idBecario = $idBecario;  
   }  
   public function getNombre() {  
     return $this->nombre;  
   }  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  
   
 }
 ?>
