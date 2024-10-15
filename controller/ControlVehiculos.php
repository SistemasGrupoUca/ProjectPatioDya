<?php
    class ControlVehiculo{
	   var $objVehiculo;
        function __construct($objVehiculo){
         $this->objVehiculo=$objVehiculo;

        }
        
    function Crear() {

        $Placa=$this->objVehiculo->getPlaca();
        $Fkiden=$this->objVehiculo->getFkiden();
        $Clase=$this->objVehiculo->getClase();
        $Marca=$this->objVehiculo->getMarca();
        $Modelo=$this->objVehiculo->getModelo();
        $Combus=$this->objVehiculo->getCombus();
        $Linea=$this->objVehiculo->getLinea();
        $Cilindraje=$this->objVehiculo->getCilindraje();
        $Kilometraje=$this->objVehiculo->getKilometraje();


        $comandoSql = "INSERT INTO vehiculos_clientes_dya (PLACA_VEHICULO,FK_IDENTIFICACION,CLASE_VEHICULO,MARCA_VEHICULO,MODELO_VEHICULO,COMBUSTIBLE_BEHICULO,LINEA_VEHICULO,CILINDRAJE_VEHICULO,KILOMETRAJE_VEHICULO) VALUES ('$Placa', '$Fkiden','$Clase','$Marca','$Modelo',
        '$Combus','$Linea','$Cilindraje','$Kilometraje',))";


        $objControlConexion = new ConexionBd();
        $objControlConexion->abrirConexion($GLOBALS['serv'],$GLOBALS['usua'],$GLOBALS['pass'],$GLOBALS['bdat'],$GLOBALS['port']);
        $objControlConexion->ejecutarComandoSql($comandoSql);
        $objControlConexion->cerrarConexion();

    }
}
    ?>