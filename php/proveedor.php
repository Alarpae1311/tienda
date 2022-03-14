<?php

  
class Proveedor {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $cif;  //El codigo que identifica a cada empresa inequivocamente   
  private $nombre;
  private $direccion;  //Dirección física del proveedor 
  private $email;
  private $telefono;
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nCif, $nNombre, $nDireccion, $nEmail, $nTelefono) {
  
    $this->cif = $nCif;
    $this->nombre = $nNombre;
    $this->direccion = $nDireccion;
    $this->email = $nEmail;
    $this->telefono = $nTelefono;

  }
  
  //Getters

  function getCif() {
    return $this->cif;
  }

  function getNombre() {
    return $this->nombre;
  }
  
  function getDireccion() {
    return $this->direccion;
  }

  function getEmail() {
    return $this->email;
  }
  
  function getTelefono() {
    return $this->telefono;
    }
    
  function imprimeProveedor() {
    return "<p>$this->cif,$this->nombre,$this->direccion,$this->email,$this->telefono</p>";
  }


  //sql para inserción del producto
  function getInsertSQL() {
    $sql = "INSERT INTO proveedores (cif,nombre,direccion,email,telefono) VALUES ('$this->cif','$this->nombre','$this->direccion','$this->email','$this->telefono') ";

    return $sql;
  }
}
?>