<?php
class programa {  
   private $idPrograma;  
   private $nombre;  
   private $pais;

   function __construct() {  
    
   }  
   

 
   public function getidPrograma() {  
     return $this->idPrograma;  
   }  
   public function setidPrograma($idPrograma) {  
     $this->idPrograma = $idPrograma;  
   }  
   public function getNombre() {  
     return $this->nombre;  
   }  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  
   
   public function getPais() {  
     return $this->pais;  
   }  
   public function setPais($pais) {  
     $this->pais = $pais;  
   }  

 }
 ?>
