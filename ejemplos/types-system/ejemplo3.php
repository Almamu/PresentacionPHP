<?php
    class Persona
    {
        private $nombre;
        
        public function setNombre (string $nombre): void
        {
            $this->nombre = $nombre;
        }
    };
    
    class Hijo extends Persona
    {
        private $padre;
        
        public function setPadre (?Persona $padre): void
        {
            $this->padre = $padre;
        }
    };
    
    $padre = new Persona ();
    $hijo = new Hijo ();
    
    $padre->setNombre ('Souichiro');
    $hijo->setNombre ('Light');
    
    $hijo->setPadre ($padre);
    var_dump ($hijo);
    $hijo->setPadre (null);
    var_dump ($hijo);