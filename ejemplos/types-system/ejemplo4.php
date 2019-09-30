<?php
    class Persona
    {
        private $nombre;
        
        public function setNombre (string $nombre)
        {
            $this->nombre = $nombre;
        }
    };
    
    class Hijo extends Persona
    {
        private $padre;
        
        public function setPadre (?Persona $padre)
        {
            $this->padre = $padre;
        }
        
        public function getPadre (): Persona
        {
            return $this->padre;
        }
    };
    
    $padre = new Persona ();
    $hijo = new Hijo ();
    
    $padre->setNombre ('Souichiro');
    $hijo->setNombre ('Light');
    
    $hijo->setPadre ($padre);
    var_dump ($hijo->getPadre ());