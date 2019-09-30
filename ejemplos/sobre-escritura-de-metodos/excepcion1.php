<?php
    class Vehiculo
    {
        protected $mejorTiempoPorVuelta;
        
        function setMejorTiempoPorVuelta (int $mejorTiempoPorVuelta)
        {
            $this->mejorTiempoPorVuelta = $mejorTiempoPorVuelta;
        }
    };
    
    class Formula1 extends Vehiculo
    {
        function setMejorTiempoPorVuelta ($mejorTiempoPorVuelta)
        {
            $this->mejorTiempoPorVuelta = $mejorTiempoPorVuelta;
        }
    };
    
    $ferrari = new Formula1 ();
    $ferrari->setMejorTiempoPorVuelta (96.4);
    
    var_dump ($ferrari);