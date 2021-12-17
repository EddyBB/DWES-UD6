<?php
    class Persona{
        private $nombre;
        private $dni;
        private $sexo;
        private $peso;
        private $altura;

        function __construct($nombre, $dni, $sexo, $peso, $altura){
            $this->nombre = $nombre;
            $this->dni = $dni;
            $this->sexo = $sexo;
            $this->peso = $peso;
            $this->altura = $altura;

        }

        function getNombre(){
            return $this->nombre;
        }

        function setNombre($nombre){
            $this->nombre = $nombre;
        }

        function getDni(){
            return $this->dni;
        }

        function setDni($dni){
            $this->dni = $dni;
        }

        function getSexo(){
            return $this->sexo;
        }

        function setSexo($sexo){
            $this->sexo = $sexo;
        }

        function getPeso(){
            return $this->peso;
        }

        function setPeso($peso){
            $this->peso = $peso;
        }

        function getAltura(){
            return $this->altura;
        }

        function setAltura($altura){
            $this->altura = $altura;
        }

        function mostrar(){
            return "nombre: " . $this->nombre . " dni: " . $this->dni . " sexo: " . $this->sexo . " peso: " . $this->peso . " altura: " . $this->altura;
        }

        function __toString(){
            return "nombre: " . $this->nombre . " dni: " . $this->dni . " sexo: " . $this->sexo . " peso: " . $this->peso . " altura: " . $this->altura;
        }
    }
?>