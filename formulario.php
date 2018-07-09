<?php 
$proceso = $_POST['proceso'];
$usuario = $_POST['usuario'];

 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ReEcorriendoCundinamarca">
    <meta name="author" content="Diego Mauricio Poveda Carreño">

    <title>prueba</title>      

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
     <script src="js/fileinput.min.js" type="text/javascript"></script>

     
<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>


</head>
<body background="images/bg.jpg">
	   <!-- Navigation -->
    <nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-brand navbar-nav fixed-top">
      
    </nav>
    
    <header>
    	<h4><p>Usuario : <?php echo $usuario; ?></p></h4>
    </header>
<div class="container">	
	<div class="row">		

		<div class="col-md-8">
		   	<form enctype="multipart/form-data" class="form-group" role="form" action="guardar_proceso.php" method="POST">
		   		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> ">
		   		<input type="hidden" name="proceso" value="<?php echo $proceso; ?> ">
		   		<input type="hidden" name="editar" value="0">		   		

				<div class="form-group">		    			
				    <div class="col-sm-6">
				     <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="proceso">
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
				    </div>

				    <div class="form-group"> <!-- Date input -->
        				<label class="control-label" for="date">Fecha</label>
        				<input class="form-control" id="date" name="fecha" placeholder="MM/DD/YYY" type="text"/>
      				</div>
			    
				      <label>Descripcion</label>
				      <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
				    
					</div>
					<div class="form-group">		    			
				    
				    	<label>Sede</label>
				     <select name="sede" >
				     	<option>Bogotá</option>
				     	<option>México</option>
				     	<option>Peru</option>

				     </select>				    
					</div>	

					<div class="from-group">						
						<input type="text" name="presupuesto" placeholder="Presupuesto $:">
					</div>			    	

				<div class="from-group">
					<button type="submit" class="btn btn-primary btn-default pull-left" >
            <span class="glyphicon glyphicon-remove"></span> GUARDAR</button>
				</div>         
		  	</form>
		 </div>
	</div>		
</div>



  <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; DIEGO MAURICIO POVEDA CARREÑO</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>