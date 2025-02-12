<?php include 'includes/header.php';

//Conectar a la base de datos con PDO

$db = new PDO('mysql:host=localhost; dbname=bienesraices', 'yojan', 'passwordroot');
//Creamos el Query
$query = 'SELECT titulo FROM propiedades';
//Consultar DB
$propiedades = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
//Visualizamos
echo'<pre>';
var_dump($propiedades);
echo'</pre>';


//Con sentencias preparadas

//Crear el Query
$query = 'SELECT precio FROM propiedades';
//Preparacion
$stmt = $db->prepare($query);
//Ejecutar
$stmt->execute();
//Obtener los resultado
$resultado =$stmt->fetchAll(PDO::FETCH_ASSOC);
//visualizar
echo'<pre>';
var_dump($resultado);
echo'</pre>';
//Visualizar especificamente el string de la interfaz
foreach($resultado as $propiedad):
    echo $propiedad['precio'];
    echo '<br>';
endforeach;

include 'includes/footer.php';