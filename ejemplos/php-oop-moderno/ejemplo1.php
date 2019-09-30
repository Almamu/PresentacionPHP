<?php
    class Test
    {
        var $value;
        
        function Test ()
        {
            $this->value = 'defecto';
        }
        
        function example ()
        {
            $this->value = 'example';
        }
    };
    
    function mutateClass ($tmp)
    {
        $tmp->example ();
        var_dump ($tmp);
    }
    
    $tmp = new Test ();
    mutateClass ($tmp);
    
    var_dump ($tmp);