<?php


class tronosdb
{
  //variables

  private $conexion;
  private $error;

  //funciones
    function __construct()
  {
    $this->conexion = new mysqli("localhost", "root", "","juegodetronos");
  }
    function geterror(){
      return $this->error;
  }
  function inicio(){
    $resultado = $this->conexion->query("SELECT title, creators, plot, season_start, season_end, generes FROM titles");
    return $resultado;
  }
  function actores(){
    $resultado = $this->conexion->query("SELECT full_desc, serie_name, episodes, season_start, season_end, name FROM cast");
    return $resultado;
  }
  function actores2(){
    $resultado = $this->conexion->query("SELECT name, serie_name, episode  FROM season_ep");
    return $resultado;
  }
}
 ?>
