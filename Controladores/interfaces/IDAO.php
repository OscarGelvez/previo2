<?php
  interface IDAO{
    public function insertar($dto);
    public function actualizar($dto);
    public function eliminar($dto);
    public function listar($where="");
  }
?>
