<?php

  
class Cliente {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $codigo;   
  private $nombre;
  private $apellidos; 
  private $direccion;
  private $fechaNacimiento;  
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nCodigo, $nNombre, $nApellidos, $nDireccion, $nFechaNacimiento) {
  
    $this->codigo = $nCodigo;
    $this->nombre = $nNombre;
    $this->apellidos = $nApellidos;
    $this->direccion = $nDireccion;
    $this->fechaNacimiento = $nFechaNacimiento; 
    
  }
  //Getters

  function getCodigo() {
    return $this->codigo;
  }

  function getNombre() {
    return $this->nombre;
  }
  
  function getApellidos() {
    return $this->apellidos;
  }

  function getDireccion() {
    return $this->direccion;
  }
  
  function getFechaNacimiento() {
    return $this->fechaNacimiento;
    }

  //sql para inserción del producto
  function getInsertSQL() {
    $sql = "INSERT INTO clientes (codigo, nombre, apellidos, direccion, fechaNacimiento) VALUES ('$this->codigo','$this->nombre','$this->apellidos','$this->direccion','$this->fechaNacimiento') ";
    return $sql;
  }

  function imprimeCliente() {
    return "<p>$this->codigo,$this->nombre,$this->apellidos,$this->direccion,$this->fechaNacimiento</p>";
  }
  
  public static function getSelectSQL($tipoOrdenacion) {

    $sql = "SELECT * FROM clientes ORDER BY ";

    switch ($tipoOrdenacion) {
      case "nombreasc":
        $sql = $sql . "nombre ASC";
        break;
      case "nombredes":
        $sql = $sql . "nombre DESC";
        break;
      case "fechaNacimientoasc":
        $sql = $sql . "fechaNacimiento ASC";
        break;
      case "fechaNacimientodesc":
          $sql = $sql . "fechaNacimiento DESC";
          break;
      default:
        $sql = $sql . "nombre ASC";
    }

    return $sql;
  }

}
?>