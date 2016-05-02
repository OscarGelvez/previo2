<?php
  /**
   *Esta clase gestiona la conexion a la base de datos solo lo que hace es
   *conectar y desconectar la base de datos
   */
  class Conexion{
    const servidor = "localhost";//servidor de la base de datos
    //const servidor="sandbox2.ufps.edu.co";//descomente esta linea si va a utilizar la base de datos de sanbox
    const bd = "ufps_6";//nombre de la base de datos
    const usuario = "ufps_6";//nombre del usuario
    const pass = "ufps_29";//constraseña de la base de datos
    protected $con;//objeto de conexion a bas de datos
    /**
     * conecta la base de datos
     */
    public function conectar(){
      try {
        $this->con= new PDO("mysql:host=".self::servidor."; dbname=".self::bd, self::usuario, self::pass);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        die("erro: ".$e->getMessage());
      }

    }
    /**
     * desconecta la base de datos
     */
    public function desconectar(){
      if($this->estaConectado())
        $this->con=null;
    }
    /**
     *
     */
    public function getConexion(){
      return $this->con;
    }
    public function estaConectado(){
      return ($this->con!=null);
    }
  }

?>
