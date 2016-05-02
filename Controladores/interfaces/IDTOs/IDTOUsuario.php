<?php
  interface IDTOUsuario{
    public function getId();
    public function setId($id);
    public function getNombres();
    public function setNombres($nombres);
    public function getApellidos();
    public function setApellidos($apellidos);
    public function getClave();
    public function setClave($clave);
  }
?>
