<!DOCTYPE html>
<head>
    <title>Consulta registro</title>
	<style type="text/css">
		form{
			
			border: 1px solid black;
			padding:10px;
			width: 270px;
			margin:auto;
			margin-top:100px;
			box-shadow: 7px 13px 37px #000;
		}
		div{
		
		   width: 270px;
           margin:auto;			   
		   padding:0px 10px 10px 10px;
		   		   
		}
		input{
			padding:5px;
			margin-bottom:5px;
		}
		input[type=number]{
			width:95%;
		}
		a{
			margin-left:90px;
		}
		input[type=submit]{
			margin-left:100px;
			padding:3px;
		}
		h2{
			text-align:center;
		}
	</style>
</head>
<body>
<?php


include("../conex.php");
$link=conectarse();
session_start();
echo 'Usuarios registrados en el sistema: '.implode( ", ", $_SESSION["sesion"] );
$contador=0.0;

?>

    <form action="consultaID.php" method="post">
		<h2>Consulta sisben</h2>
        <input type="number" name="id" placeholder="Numero de documento" required><br>
        <input type="submit" value="Consultar"><br>
		<a href="../index.php"> volver al inicio</a>
    </form>
	<br>
	<br>
</body>

<?php







if (isset($_POST['id'])) {
    $id= $_POST['id'];
    $var_consulta= "SELECT *  from sisben where Id = $id;";
    $resultado=$link->query($var_consulta);
 ?>  


	 <?php while ($row = $resultado->fetch_assoc()) { 
	    
	$contador= $contador+1;
 		
		  echo "<div><h1>Usuario registrado</h1>";
		  echo "Sus datos son: <br>";
		  echo "Identificacion: ".$row["Id"]."<br>";     
	      echo "Nombres: ".$row["Nombres"]."<br>"; 
	      echo "Apellidos: ".$row["Apellidos"]."<br>"; 
	      echo "Estracto: ".$row["Estracto"]."<br>";      
	      echo "Ingreso mensual: ".$row["Ingreso_Mensual"]."<br>";     
	      echo "Grupo: ".$row["Grupo"]."<br></div>";      
	      
	     
	   
	    }
		if($contador!=1){
			echo"<h2>No se encuentra registrado!</h2>";
		}

		}?>
	
    </html>