<?php
class perro
{
    private $Tamaño;
    private $Peso;
    private $Color;
    private $Origen;

    //Declaración constructor
    public function __construct($entradatamaño,$entradapeso,$entradacolor,$entradaorigen,){
        $this->Tamaño = $entradatamaño;
        $this->Peso = $entradapeso;
        $this->Color = $entradacolor;
        $this->Origen= $entradaorigen;
    }
    public function imprimirAtributos()
    {
        echo $this->Tamaño."<br>";
        echo $this->Peso."<br>";
        echo $this->Color."<br>";  
        echo $this->Origen."<br>";
    }

    public function obtenertamaño($objeto){
        $Tamaño = $objeto->Tamaño;
        return $Tamaño;
    }
    public function obtenerpeso($objeto){
        $Peso = $objeto->Peso;
        return $Peso;
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
$objeto = new perro("Grande,Mediano","27 Kilos","Dorado,Blanco,Negro", "Escocia",);



$Tamañoperro = $objeto->obtenertamaño($objeto);
$Pesoperro = $objeto->obtenerpeso($objeto);
$Colorperro = $objeto->obtenercolor($objeto);
$Origenperro = $objeto->obtenerorigen($objeto);


echo "<h1>Tamaño: </h1>".$Tamañoperro;
echo "<h1>Peso: </h1>".$Pesoperro;
echo "<h1>Color: </h1>".$Colorperro;
echo "<h1>Origen: </h1>".$Origenperro;
?>

