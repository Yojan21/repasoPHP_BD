<?php include 'includes/header.php';

//las clases abstractas son aquellas que no pueden ser instanciadas, estan diseñadas para ser heredadas

class Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " y una capacidad de " . $this->capacidad . " personas";
    }
    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte{
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " y una capacidad de " . $this->capacidad . " personas y no gasta gasolina";
    }
}

class Automovil extends Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }
    public function getTransmision() : string{
        return $this->transmision;
    }
}

$transporte = new Transporte(1,3);
echo $transporte -> getInfo();

/* $bicicleta = new Bicicleta(2,1);
echo $bicicleta->getInfo();
echo "<hr>";
$auto = new Automovil(4,5, 'Manual');
echo $auto->getInfo();
echo "<hr>";
echo $auto->getRuedas();
echo "<hr>";
echo $auto->getTransmision();
echo "<hr>"; */

include 'includes/footer.php';