<?php
  include_once "../interfaces/IDTOs/IDTOCurso.php";
  class Curso implements IDTOCurso{
    private $id;
    private $nombre;
    private $grado;
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
    public function getGrado(){
      return $this->grado;
    }
    public function setGrado($grado){
      $this->grado = $grado;
    }
  }
?>
