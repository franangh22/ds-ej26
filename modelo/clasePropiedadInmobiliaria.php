<?php

    class PropiedadInmobiliaria{

        public $Id; 
        public $Direccion;
        public $MetrosCuadrados;
        public $Ciudad;
        public $Valor;

        function __construct($Ide, $Direc, $MetroCuadrado, $Ciudad, $Valor){
            $this->Id = $Ide;
            $this->Direccion = $Direc;
            $this->MetrosCuadrados = $MetroCuadrado;
            $this->Ciudad = $Ciudad;
            $this->Valor = $Valor;
        }

        public function MostrarDatos(){
            echo "<hr>";
            echo "<--- Propiedad Inmobiliaria ---> <br>";
            echo "ID: " . $this->Id . "<br>";
            echo "Dirección: " . $this->Direccion . "<br>";
            echo "Metros Cuadrados: " . $this->MetrosCuadrados . "<br>";
            echo "Ciudad: " . $this->Ciudad . "<br>";
            echo "Valor: " . $this->Valor . "<br>";
            echo "<hr>";
        }

    }


?>