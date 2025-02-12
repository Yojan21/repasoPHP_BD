<?php
declare(strict_types = 1); //Obliga a que las variables sean del tipo de tiene definido
include 'includes/header.php';

//Encapsulación

class Galletas{
    //Public -- Se puede acceder en cualquier lugar (Clase y Objeto)
    //Protected -- Se puede acceder o modificar unicamente en la clase
    //Private -- Solo miembros de la misma clase pueden acceder a el
    
    
    public function __construct(protected string $nombre, public int $precio, public int $inventario)
    {
    }
    //Agregando un Metodo
    public function mostrarProducto(): void{
        echo "La galleta: " . $this->nombre . " tiene un precio de: $ " . $this->precio . " y hay disponibles: " . $this->inventario ;
        echo '<br>';
    }
    //para obtener nombre fuera de la clase
    public function getnombre():string {
        return $this->nombre;
    }
    //Para modificar nombre desde fuera de la clase
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

$galleta = new Galletas('Chocolate', 800, 12);
$galleta -> mostrarProducto();
echo $galleta -> getnombre();
echo '<br>';
$galleta-> setNombre('Nuevo nombre');
$galleta -> mostrarProducto();


/* $galleta2 = new Galletas('Chocolate Blanco', 950, 8);
$galleta2 -> mostrarProducto(); */


include 'includes/footer.php';