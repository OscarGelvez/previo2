<?php
  include_once "Conexion.php";
  include_once "../interfaces/IDAO.php";
  include_once "../interfaces/IDTOs/IDTOArea.php";
  

  class AreaDAO extends Conexion implements IDAO{
    /**
     * inserta en la base de datos un Area del estudante.
     * @return SQLSTATE : codigo de estado de la base de datos en caso de que
     * no haya algun error devolvera un 0 y si el parametro pasado no es un objeto
     * que hereda de IDTOArea devolverá null.
     */
    public function insertar($area){
      $error=null;
      if($area instanceof IDTOArea){
        $error=0;
        if(!$this->estaConectado())
          $this->conectar();
        try{
          $this->con->exec("SET CHARACTER SET utf8");
          $sql = "INSERT INTO `area`(`nombre_area`) VALUES (?);";
          $declaracion = $this->con->prepare($sql);
          $declaracion->execute(array($area->getNombre()));

        }catch(PDOException $e){
          $error=$e->getCode().$e->getMessage();
        }
      }
      return $error;
    }
    /**
     * actualiza en la base de datos un Area del estudante.
     * @return SQLSTATE : codigo de estado de la base de datos en caso de que
     * no haya algun error devolvera un 0 y si el parametro pasado no es un objeto
     * que hereda de IDTOArea devolverá null.
     */
    public function actualizar($area){
      $error=null;
      if($area instanceof IDTOArea){
        $error=0;
        if(!$this->estaConectado())
          $this->conectar();
        try{
          $this->con->exec("SET CHARACTER SET utf8");
          $sql = "UPDATE `area` SET `nombre_area`=? WHERE id_area = ?;";
          $declaracion = $this->con->prepare($sql);
          $declaracion->execute(array($area->getNombre(),$area->getId()));

        }catch(PDOException $e){
          $error=$e->getCode().$e->getMessage();
        }
      }
      return $error;
    }
    /**
     * elimina en la base de datos un Area del estudante.
     * @return SQLSTATE : codigo de estado de la base de datos en caso de que
     * no haya algun error devolvera un 0 y si el parametro pasado no es un objeto
     * que hereda de IDTOArea devolverá null.
     */
    public function eliminar($area){
      $error=null;
      if($area instanceof IDTOArea){
        $error=0;
        if(!$this->estaConectado())
          $this->conectar();
        try{
          $this->con->exec("SET CHARACTER SET utf8");
          $sql = "DELETE FROM `area` WHERE id_area = ?;";
          $declaracion = $this->con->prepare($sql);
          $declaracion->execute(array($area->getId()));

        }catch(PDOException $e){
          $error=$e->getCode().$e->getMessage();
        }
      }
      return $error;
    }
    /**
     * lista los estudiantes.
     * @param condicion para listar en caso de no colocar nanda se listará toda la tabla
     * @return lista<Area>.
     */
    public function listar($condicion = ""){
      $lista = array();
      if(!$this->estaConectado())
        $this->conectar();
      if($condicion != 0)
        $condicion = " WHERE ".$condicion;
      try{
        $this->con->exec("SET CHARACTER SET utf8");
        $sql = "SELECT * FROM `area`".$condicion.";";
        $resp = $this->con->prepare($sql);
        $resp->execute();
        $fila=$resp->fetch();
        while($fila){
          $aux = new Area();
          $aux->setId($fila[0]);
          $aux->setNombre($fila[1]);
          $lista[]=$aux;
          $fila=$resp->fetch();
        }
      }
      catch(PDOException $e){
        die($e->getCode());
      }
      return $lista;
    }
  }


?>
