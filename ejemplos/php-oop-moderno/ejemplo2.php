<?php
    class Persona
    {
        private $nombre;
        
        public function setNombre ($nombre)
        {
            $this->nombre = $nombre;
        }
        
        public function getNombre ()
        {
            return $this->nombre;
        }
    };
    
    function sayHola (Persona $persona)
    {
        echo 'Hola ' . $persona->getNombre ();
    }
    
    $persona = new Persona ();
    $persona->setNombre ('Almamu');
    sayHola ($persona);