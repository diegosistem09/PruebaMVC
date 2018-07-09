<?php 


$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$sede = $_POST['sede'];
$presupuesto = $_POST['presupuesto'];

$usuario = $_POST['usuario'];
$proceso = $_POST['proceso'];	

$accion = $_POST['editar'];

$conexion =  new mysqli('localhost', 'root','','prueba_tecnica');

if ($accion ==0) {
	crear($descripcion,$fecha,$sede,$presupuesto,$usuario);
}
if ($accion == 1) {
	editar($descripcion,$fecha,$sede,$presupuesto,$usuario,$proceso);
}

function crear($descripcion,$fecha,$sede,$presupuesto,$usuario){
$conexion =  new mysqli('localhost', 'root','','prueba_tecnica');

$guardar = "INSERT INTO `solicitud` (`numero_proceso`, `descripcion`, `fecha_creacion`, `sede`, `presupuesto`, `usuario`) VALUES (NULL, '$descripcion', '$fecha', '$sede', '$presupuesto', '$usuario');";

$query = $conexion ->query($guardar);

if($query){
 echo '<script type="text/javascript">
       alert("DATOS Almacenados Corectamente ");
        window.location="http://localhost/pruebaMVC_Diegop/ver_proceso.php?usuario=$usuario&proceso=$proceso";      
    </script> ';
}

}

function editar($descripcion,$fecha,$sede,$presupuesto,$usuario,$proceso)
{
	$conexion =  new mysqli('localhost', 'root','','prueba_tecnica');
	$editar ="UPDATE `solicitud` SET `descripcion` = '$descripcion', `fecha_creacion` = '$fecha', `sede` = '$sede', `presupuesto` = '$presupuesto' WHERE `solicitud`.`numero_proceso` = $proceso; ";

	$query = $conexion ->query($editar);

if($query){
 echo '<script type="text/javascript">
       alert("DATOS Actualizados Corectamente ");
        window.location="http://localhost/pruebaMVC_Diegop/ver_proceso.php?usuario=$usuario&proceso=$proceso";      
    </script> ';
}
}

?>