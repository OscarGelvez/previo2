<?php
  include_once "../interfaces/IDTOs/IDTOUsuario.php";
  class Usuario implements IDTOUsuario{
    private $id;
    private $nombres;
    private $apellidos;
    private $clave;
    public function getId(){
      return $this->id;
    }
    public function setId($id){
      $this->id = $id;
    }
    public function getNombres(){
      return $this->nombres;
    }
    public function setNombres($nombres){
      $this->nombres = $nombres;
    }
    public function getApellidos(){
      return $this->apellidos;
    }
    public function setApellidos($apellidos){
      $this->apellidos = $apellidos;
    }
    public function getClave(){
      return $this->clave;
    }
    public function setClave($clave){
      $this->clave = $clave;
    }
  }
?>
