<?php
declare(strict_types = 1); //Obliga a que las variables sean del tipo de tiene definido
include 'includes/header.php';

//Definir o crear una clase en la forma antigua

class Producto{
    public $nombre;
    public $precio;
    public $disponible;

    //Crear un constructor
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        $this-> nombre = $nombre;
        $this-> precio = $precio;
        $this -> disponible = $disponible;
    }
}

$producto = new Producto('Tablet', 200, True);
echo '<pre>';
var_dump($producto);
echo '</pre>';

$producto2 = new Producto('Monitor', 300, False);
echo '<pre>';
var_dump($producto2);
echo '</pre>';


//Definir o crear clase en la forma nueva desde PHP8

class Galletas{
    public function __construct(public string $nombre, public int $precio, public int $inventario)
    {
    }

    //Agregando un Metodo
    public function mostrarProducto(){
        echo "La galleta: " . $this->nombre . " tiene un precio de: $ " . $this->precio . " y hay disponibles: " . $this->inventario ;
        echo '<br>';
    }
}

$galleta = new Galletas('Chocolate', 800, 12);
$galleta -> mostrarProducto();

$galleta2 = new Galletas('Chocolate Blanco', 950, 8);
$galleta2 -> mostrarProducto();

echo '<pre>';
var_dump($galleta);
echo '</pre>';



include 'includes/footer.php';