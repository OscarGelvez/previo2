<?php
  include_once "../DTOs/Area.php";
  include_once "../DAOs/AreaDAO.php";

  $dao = new AreaDAO();
  $dao->conectar();
  foreach ($dao->listar() as $area) {
    echo $area->getId()." ".$area->getNombre()."\n<br>";
  }
  $dao->desconectar();
?>
