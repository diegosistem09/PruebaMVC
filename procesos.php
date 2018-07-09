
<?php 
$usuario = $_GET['usuario']; 
$identidad = $_GET['identidad'];
echo $identidad;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>prueba</title>
    <link rel="shortcut icon" href="images/favicon.ico">    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/modern-business.css" rel="stylesheet">

  
</head>

<body>    
  
    <header>   
    <h4>SEÑOR USUARIO : <?php echo $usuario;?> </h4>
    <h5><p>Selecciona El proceso</p></h5>
    </header>


<div class="container">

  <div class="row">
    <div class="col-md-12"></div>
    <div class="col-md-4">
    
    <form action="ver_proceso.php" method="GET">

    <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="proceso" onchange="this.form.submit()">
        <?php 
        $conexion =  new mysqli('localhost', 'root','','prueba_tecnica');

        $consulta_proceso ="SELECT * FROM `proceso` ORDER BY `proceso`.`id_proceso` ASC ";

          if (!$conexion->set_charset("utf8")) 
            {
              printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
              exit();
          }

        $query = $conexion ->query($consulta_proceso);
        if(!$query)
        {
          echo "ERRRO QUERY";
          echo $consulta_usuario;
        }
        else{
          

          $query = $conexion->query($consulta_proceso);

          if(mysqli_num_rows($query) > 0)
          {
            while($row=$query->fetch_assoc())
            {
              $proceso = $row['nombre_proceso'];


        ?>

          <option data-subtext="<?php echo $proceso ;?>" > 
            <?php echo $proceso; }}} ?>
          </option>         
        </select>
        <input type="hidden" name="usuario" value="<?php echo $identidad; ?> "> 
    </form>

</div>
<div class="col-md-8">
  <form action="formulario.php" method="GET">    
    <input type="hidden" name="usuario" value="<?php echo $identidad; ?> ">
    <input type="hidden" name="proceso" value="<?php echo $usuario; ?> ">
    <button type="submit" class="btn btn-primary btn-default pull-left" >
      <span class="glyphicon glyphicon-remove"></span> Crear Procesos</button>
  </form>
</div>
  </div>


  <div class="row">
    <div class="col-md-12">
      
    </div>
    
  </div>
        

</div>



  <div class="row">
    	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    	</div>
		  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>		           
	</div>
</div>

  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>