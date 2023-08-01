<?php
class Gato
{
    private $Familia;
    private $Peso;
    private $Color;
    private $Origen;

    //Declaración constructor
    public function __construct($entradafamilia,$entradapeso,$entradacolor,$entradaorigen,){
        $this->Tamaño = $entradafamilia;
        $this->Peso = $entradapeso;
        $this->Color = $entradacolor;
        $this->Origen= $entradaorigen;
    }
    public function imprimirAtributos()
    {
        echo $this->Familia."<br>";
        echo $this->Peso."<br>";
        echo $this->Color."<br>";  
        echo $this->Origen."<br>";
    }

    public function obtenerFamilia($objeto){
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
$objeto = new Gato("Felidae","8-9Kilos","Crema,Amarrillo,Dorado", "Estados Unidos",);



$Familiagato = $objeto->obtenerFamilia($objeto);
$Pesogato = $objeto->obtenerpeso($objeto);
$Colorgato = $objeto->obtenercolor($objeto);
$Origengato = $objeto->obtenerorigen($objeto);


echo "<h1>Familia: </h1>".$Familiagato;
echo "<h1>Peso: </h1>".$Pesogato;
echo "<h1>Color: </h1>".$Colorgato;
echo "<h1>Origen: </h1>".$Origengato;
?>

