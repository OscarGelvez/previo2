<?php
    include_once "../interfaces/IDTOs/IDTOArea.php";
    class Area implements IDTOArea{
      private  $id;
      private $nombre;
      public function getId(){
        return $this->id;
      }
      public function setId($id){
        $this->id = $id;
      }
      public function getNombre(){
        return $this->nombre;
      }
      public function setNombre($nombre){
        $this->nombre = $nombre;
      }
    }
?>
