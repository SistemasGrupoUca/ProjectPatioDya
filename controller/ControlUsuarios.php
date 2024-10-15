<?php
    class ControlUsuario{
	   var $objUsuario;
        function __construct($objUsuario){
         $this->objUsuario=$objUsuario;

        }

    function validarIngreso()
        {
            $msg = "ok";
            $validar=false;
            $usu= $this->objUsuario->getNomUsuario(); 
            $con=$this->objUsuario->getContrasena();
            $comandoSql ="SELECT * FROM usuarios_dya WHERE NOMBRE_USUARIO='$usu' AND CONTRASENA_USUARIO='$con'";
            $objControlConexion = new ConexionBd();
            $objControlConexion->abrirConexion($GLOBALS['serv'],$GLOBALS['usua'],$GLOBALS['pass'],$GLOBALS['bdat'],$GLOBALS['port']);
            $recordSet = $objControlConexion->ejecutarSelectSql($comandoSql);
            try
            {
                if (mysqli_num_rows($recordSet) > 0) 
                {
                    $validar = true;
                }
                $objControlConexion->cerrarConexion();
            }
            catch (Exception $objExcetion)
            {
                $msg = $objExcetion->getMessage();
            }
            
            return $validar;
    }
    }
    ?>