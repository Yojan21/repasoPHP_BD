<?php include 'includes/header.php';
require 'vendor/autoload.php';

use App\Clientes;
use App\Detalles;

$detalles = new Detalles();
$clientes = new Clientes();
$clientes2 = new Clientes();

include 'includes/footer.php';