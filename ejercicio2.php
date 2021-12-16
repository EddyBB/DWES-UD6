<?php
    class Trabajador extends Persona{
        private $nombreEmpresa;

        // se pasa todos los datos de persona mas el nombre de la empresa
        function __construct($nombreEmpresa){
            // constructor de persona hace falta

            $this->nombreEmpresa = $nombreEmpresa;

        }

        function getNombreEmpresa(){
            return $this->nombreEmpresa;
        }

        function setNombreEmpresa($nombreEmpresa){
            $this->nombreEmpresa = $nombreEmpresa;
        }

        function mostrar(){
            parent::mostrar();
            return "nombre Empresa: " . $this->nombreEmpresa;
        }

        function mostrarCompleto(){
            
        }
    }
?>