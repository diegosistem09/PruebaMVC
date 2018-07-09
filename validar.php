 <?php 

 $usuario = $_POST['usuario'];
 $password = $_POST['pass'];



$conexion =  new mysqli('localhost', 'root','','prueba_tecnica');
#$conexion = new mysqli ('localhost','reecorriendocund_Diego666','Diego666*','reecorriendocund_admin');


if ($usuario !="" && $password != "") 
{

  $consulta_usuario = "SELECT * FROM `usuario` WHERE `nombre_usuario` LIKE '%$usuario%' and contrasena LIKE '%$password%'";

    if (!$conexion->set_charset("utf8")) 
    {
      printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
      exit();
  }
}
else{
  echo '<script type="text/javascript">
       alert("DATOS NO VALIDOS ");
        window.location="http://localhost/pruebaMVC_Diegop";      
    </script> ';
  }


$query = $conexion ->query($consulta_usuario);
if(!$query)
{
  echo "ERRRO QUERY";
  echo $consulta_usuario;
}
else{
  if(mysqli_num_rows($query) > 0)
  {
    while($row = $query->fetch_assoc()) 
    {
     $usuario = $row['nombre_usuario'];     
     $identidad = $row['identidad'];

     

      echo '<script type="text/javascript">       
        window.location="http://localhost/pruebaMVC_Diegop/procesos.php?usuario='.$usuario.'&identidad='.$identidad.' ";      
    </script> ';
    }
  }
  else{
    echo '<script type="text/javascript">
       alert("DATOS NO VALIDOS ");
        window.location="http://localhost/pruebaMVC_Diegop";      
    </script> ';
  }
}


    ?>