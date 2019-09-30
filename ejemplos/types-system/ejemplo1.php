<?php
    class Persona
    {
        private string $nombre;
        private ?string $padre;
        
        public function setNombre (string $nombre): void
        {
            $this->nombre = $nombre;
        }
        
        public function setPadre (?string $padre): void
        {
            $this->padre = $padre;
        }
    };
    
    $persona = new Persona ();
    $persona->setNombre ("Almamu");
    var_dump ($persona);
    $persona->setPadre (null);