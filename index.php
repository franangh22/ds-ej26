<?php

    require_once  'modelo/clasePropiedadInmobiliaria.php';

    #Instanciar clase Propiedad Inmobiliaria
    $PropInmob = new PropiedadInmobiliaria(1,'San Juan 325',100,'Rosario','$ 1.500.000');
    $PropInmob -> MostrarDatos();
    
?>  