<?php
include "ejercicio1.php";
    class Trabajador extends Persona{
        private $nombreEmpresa;

        // se pasa todos los datos de persona mas el nombre de la empresa
        function __construct($nombre, $dni, $sexo, $peso, $altura,$nombreEmpresa){
            // constructor de persona hace falta
            parent::__construct($nombre, $dni, $sexo, $peso, $altura);
            $this->nombreEmpresa = $nombreEmpresa;

        }

        function getNombreEmpresa(){
            return $this->nombreEmpresa;
        }

        function setNombreEmpresa($nombreEmpresa){
            $this->nombreEmpresa = $nombreEmpresa;
        }

        function mostrar(){
            
            return "nombre Empresa: " . $this->nombreEmpresa;
        }

        function mostrarCompleto(){
            return parent::mostrar() . " nombre Empresa: " . $this->nombreEmpresa;
        }

        function __toString(){
            return parent::__toString() . " nombre Empresa: " . $this->nombreEmpresa;
        }
    }
?>