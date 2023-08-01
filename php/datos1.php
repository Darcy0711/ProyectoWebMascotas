<?php
class RazaSamoyedo
{
    private $Tamaño;
    private $Ojos;
    private $Color;
    private $Origen;

    //Declaración constructor
    public function __construct($entradatamaño,$entradaojos,$entradacolor,$entradaorigen){
        $this->Tamaño = $entradatamaño;
        $this->Ojos = $entradaojos;
        $this->Color = $entradacolor;
        $this->Origen= $entradaorigen;
    }
    public function imprimirAtributos()
    {
        echo $this->Tamaño."<br>";
        echo $this->Ojos."<br>";
        echo $this->Color."<br>";  
        echo $this->Origen."<br>";
    }

    public function obtenertamaño($objeto){
        $Tamaño = $objeto->Tamaño;
        return $Tamaño;
    }
    public function obtenerojos($objeto){
        $Ojos = $objeto->Ojos;
        return $Ojos;
    }
    public function obtenercolor($objeto){
        $Color = $objeto->Color;
        return $Color;
    }
    public function obtenerorigen($objeto){
        $Origen = $objeto->Origen;
        return $Origen;
    }
}
$objeto = new RazaSamoyedo("16-30kg","Generalmente son negros o de color café y almendrados","Blanco", "Rusia");


$Tamañoperro = $objeto->obtenertamaño($objeto);
$Ojosperro = $objeto->obtenerOjos($objeto);
$Colorperro = $objeto->obtenercolor($objeto);
$Origenperro = $objeto->obtenerorigen($objeto);

echo "<h1>Tamaño: </h1>".$Tamañoperro;
echo "<h1>Ojos: </h1>".$Ojosperro;
echo "<h1>Color: </h1>".$Colorperro;
echo "<h1>Origen: </h1>".$Origenperro;