<?php
  class Vehiculo{
  	var $Placa;

    var $Fkiden;
  	var $Clase;

    var $Marca;

    var $Modelo;

    var $Combus;

    var $Linea;
    var $Cilindraje;

    var $Kilometraje;



 

  	function __construct($Placa,$Fkiden,$Clase,$Marca,$Modelo,$Combus, $Linea,$Cilindraje, $Kilometraje){

  		$this->Placa=$Placa;
        $this->Fkiden=$Fkiden;
  		$this->Clase=$Clase;
        $this->Marca=$Marca;
        $this->Modelo=$Modelo;
        $this->Combus=$Combus;
        $this->Linea=$Linea;
        $this->Cilindraje=$Cilindraje;
        $this->Kilometraje=$Kilometraje;

  	}
  	function setPlaca($Placa){
  		$this->Placa=$Placa;
  	}
  	function getPlaca(){
  		return $this->Placa;
  	}
      function setFkiden($Fkiden){
        $this->Fkiden=$Fkiden;
    }
    function getFkiden(){
        return $this->Fkiden;
    }
    function setClase($Clase){
        $this->Clase=$Clase;
    }
    function getClase(){
        return $this->Clase;
    }
    function setMarca($Marca){
        $this->Marca=$Marca;
    }
    function getMarca(){
        return $this->Marca;
    }
    function setModelo($Modelo){
        $this->Modelo=$Modelo;
    }
    function getModelo(){
        return $this->Modelo;
    }
    function setCombus($Combus){
        $this->Combus=$Combus;
    }
    function getCombus(){
        return $this->Combus;
    }
    function setLinea($Linea){
        $this->Linea=$Linea;
    }
    function getLinea(){
        return $this->Linea;
    }
    function setCilindraje($Cilindraje){
        $this->Cilindraje=$Cilindraje;
    }
    function getCilindraje(){
        return $this->Cilindraje;
    }
    function setKilometraje($Kilometraje){
        $this->Kilometraje=$Kilometraje;
    }
    function getKilometraje(){
        return $this->Kilometraje;
    }
  }
?>
