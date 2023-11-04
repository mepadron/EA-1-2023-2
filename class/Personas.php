<?php

class Personas
{

    public function Hola($edad, $ape, $lugar)
    // public function Hola()
    {
        echo "Hola Mundo {$edad}" . "<br>";
        // echo "Hola Mundo " . "<br>";
        $this->Nombre($ape, $lugar);
    }


    public function Nombre($ape, $lugar)
    {
        echo "MIguel eduardo {$ape}  y tu vives en {$lugar}";
    }
}
