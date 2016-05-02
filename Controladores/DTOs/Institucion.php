<?php
  include_once "../interfaces/IDTOs/IDTOInstitucion.php";
  class Institucion implements IDTOInstitucion{
    private $id;
    private $nombre;
    private $direccion;
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
    public function getDireccion(){
      return $this->direccion;
    }
    public function setDireccion($direccion){
      $this->direccion = $direccion;
    }
  }
?>
