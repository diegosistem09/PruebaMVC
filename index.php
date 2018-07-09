<!DOCTYPE html>
<html>
<head>
	<title>Recorre Cundinamarca</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ReEcorriendoCundinamarca</title>
    <link rel="shortcut icon" href="images/favicon.ico">    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/modern-business.css" rel="stylesheet">

  
</head>

<body>    
    <header>   
    <h4>Selecciona El proceso</h4> 	
    </header>

<div class="container">

	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">      
            <div class="modal-header">          
              <div class="row">
                <img  src="images/slogan.png" class="img-responsive" alt="Cinque Terre" width="120" height="40">
                <div class="col-md-10 col-md-offset-8">                    
                </div>                
              </div>            
            </div>           
        <div class="modal-body" style="padding:30px 40px;">          
          <form action="validar.php" method="post" role="form">
            
           <label>Nombre de Usuario</label>
           <input type="text" name="usuario" class="form-control" required="true">
           <label>Contraseña</label>
           <input type="password" name="pass" required="true">

          <button type="submit" class="btn btn-danger btn-default pull-left" >
            <span class="glyphicon glyphicon-remove"></span> ENTRAR</button>

          </form>
          
        </div>
        <div class="modal-footer">
          
         
        </div>
      </div>
      
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
    <script language="Javascript">
document.oncontextmenu = function(){return false}
</script>
<script>
$(document).ready(function(){
    $("#myModal").modal();    
});
</script>
</body>
</html>