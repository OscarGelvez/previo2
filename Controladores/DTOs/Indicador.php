<?php
  include_once "../interfaces/IDTOs/IDTOIndicador.php";
  class Indicador implements IDTOIndicador{
    private $id;
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
