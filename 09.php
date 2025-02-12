<?php include 'includes/header.php';

//Conectar la base de datos
$db = new mysqli("localhost", "yojan", "passwordroot", "bienesraices");
//Creamos el Query
$query = 'SELECT titulo FROM propiedades';
//Ejecucion del Query
$resultado = $db->query($query);
//Visualizamos los resultados
while($row = $resultado->fetch_assoc()):
var_dump($row);
endwhile;

echo '<br>';

//Creamos el Query
$query = 'SELECT precio, descripcion FROM propiedades';
//Lo preparamos
$stmt = $db->prepare($query);
//lo ejecutamos
$stmt->execute();
//creamos la variables
$stmt->bind_result($precio, $descripcion);
while($stmt->fetch())://Asignamos el resultado
    //Visualizamos el resultado
    var_dump($precio);
    var_dump($descripcion);
endwhile;

include 'includes/footer.php';