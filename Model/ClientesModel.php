<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/Gesti-ndeCitas-BuffeteLegal/Model/ConexionModel.php';
    
    
    function ConsultarNacionalidadModel()
    {
        try
        {
            $context = OpenConnection();

            $sentencia = "CALL ConsultarNacionalidad()";
            $resultado = $context -> query($sentencia);

            $datos = [];
            while ($row = $resultado->fetch_assoc()) {
                $datos[] = $row;
            }

            $resultado->free();
            CloseConnection($context);

            return $datos;
        }
        catch(Exception $error)
        {
            SaveError($error);
            return null;
        }
    }
?>