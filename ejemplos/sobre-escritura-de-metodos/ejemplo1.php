<?php
    class Vehiculo
    {
        var $anchoRuedas;
        
        function setAnchoRuedas ($anchoRuedas)
        {
            $this->anchoRuedas = $anchoRuedas;
        }
    };
    
    class Formula1 extends Vehiculo
    {
        var $anchoRuedasDelanteras;
        var $anchoRuedasTraseras;
        
        function setAnchoRuedas ($anchoRuedasDelanteras, $anchoRuedasTraseras)
        {
            $this->anchoRuedasDelanteras = $anchoRuedasDelanteras;
            $this->anchoRuedasTraseras = $anchoRuedasTraseras;
        }
    };
    
    $ferrari = new Formula1 ();
    
    $ferrari->setAnchoRuedas (305, 405);
    
    var_dump ($ferrari);