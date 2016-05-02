<?php
  require_once "../interfaces/IDTOs/IDTOApp.php";
  class App implements IDTOApp{
    private $id;
    private $nombre;
    private $url;
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
    public function getUrl(){
      return $this->url;
    }
    public function setUrl($url){
      $this->url = $url;
    }
  }

?>
