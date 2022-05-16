<?php 

    function validarId($id){
        if (is_numeric($id)) 
        return true;    
    }

    function validarNombre($nombre){
        if (strlen(trim($nombre))>0 && 
        strlen($nombre)<20) 
        return true; 
    }

    function validarApellido($apellido){
        if (strlen(trim($apellido))>0 && 
        strlen($apellido)<20) 
        return true;    
    }

    function validarTelefono($telefono){
        if (is_numeric($telefono) && 
        strlen($telefono)==9) 
        return true;    
    }

    function validarDireccion($direccion){
        if (strlen(trim($direccion))>0 &&
        strlen($direccion)<50)
        return true;   
    }

    