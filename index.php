<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// echo "Hola Mundo";
// echo date('d-m-Y');
include_once("class/Personas.php");




$ejecutar = new Trabajo();

$ejecutar->Hola(77, 'Gabriel', 'VILLA');
echo $ejecutar->LugarTrabajo("<br>Area de sistemas de la UNERG");
