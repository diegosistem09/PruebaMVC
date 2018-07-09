<?php 

$usuario =$_GET['usuario'];
$proceso=$_GET['proceso'];

$conexion =  new mysqli('localhost', 'root','','prueba_tecnica');
$seleccion = "SELECT * FROM `solicitud` ";
$query = $conexion ->query($seleccion);

?>

<!DOCTYPE html>
<html>
<head>
	<title>prueba</title>
</head>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     <script src="js/fileinput.min.js" type="text/javascript"></script>
<body>
	<header>
		
	</header>
	<?php 
	if(!$query)
{
  echo "ERRRO QUERY";
  echo $consulta_usuario;
}
else
{
	if(mysqli_num_rows($query) > 0)
	{
		while($row = $query->fetch_assoc()) 
		{
			$numero_proceso = $row['numero_proceso'];
			$descripcion = $row['descripcion'];
			$fecha_creacion = $row['fecha_creacion'];
			$sede = $row['sede'];
			$presupuesto = $row['presupuesto'];
			
			$usuario = $row['usuario'];

			echo "Numero De Proceso :".$numero_proceso;




	 ?>
	 <div class="container">
	 	<div class="row">
	 		<div class="col-md-6">
	 			<table class="table">
	 				<thead>
	 					<tr>
	 						<th>
	 							Numero del proceso
	 						</th>
	 						<th>Descripción</th>
	 						<th>Fecha</th>
	 						<th>Presupuesto</th>
	 						<th>
	 							<form action="editar.php" method="GET">
	 							<input type="hidden" name="editar" value="1"> 
	 							<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "> 
	 							<input type="hidden" name="proceso" value="<?php echo $numero_proceso; ?> "> </td>
	 						 	<button type="submit" class="btn btn-primary btn-default pull-left" >
      							<span class="glyphicon glyphicon-remove"></span> Ver Procesos</button>
	 						</form>
	 						</th>
	 					</tr>
	 				</thead>
	 				<tr>
	 					<td><?php echo $numero_proceso; ?></td>
	 				</tr>
	 				<tr>
	 					<td><?php echo $descripcion; ?></td>
	 				</tr>
	 				<tr>
	 					<td><?php echo $fecha_creacion; ?></td>
	 				</tr>
	 				<tr>
	 					<td><?php echo $sede; ?></td>
	 				</tr>
	 				<tr>
	 					<td><?php echo $presupuesto; ?></td>
	 				</tr>

	 				<tr>
	 					<td>
	 						
	 				</tr>
	 				

	 				<?php 		}
	}
	else
	{
		echo "ERROR QUERY";
	}
} ?>
	 			</table>
	 		</div>
	 		
	 	</div>
	 </div>


<footer>	
</footer>
</body>
</html>
