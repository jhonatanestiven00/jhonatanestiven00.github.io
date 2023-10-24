<!DOCTYPE html>
<head>
    <title>manejo de datos</title>
</head>
<body>
    
</body>
</html>

<?php 
include("../conex.php");
$link=conectarse();
session_start();
echo '<br>Usuarios registrados en el sistema: '.implode( ", ", $_SESSION["sesion"] ).'<br>';

$id= $_POST['id'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$estracto= $_POST['estracto'];
$salario= $_POST['salario'];
$nivel;
$estado;

if ($estracto==1||$estracto==2) {
 $nivel="A";
 $estado= "pobreza extrema";

}
if ($estracto==3||$estracto==4) {
 $nivel="B";
 $estado= "pobreza moderada";

 }
if ($estracto==5||$estracto==6) {
 $nivel="C";
 $estado= "poblacion vulnerable";

 }  
 $varconsulta="INSERT INTO sisben VALUES('$id', '$nombre', '$apellido', '$estracto', '$salario','$nivel');";
 $link->query($varconsulta);  

 echo"<div><h2>Tus datos registrados son:</h2>";
 echo "Documento: ".$id."<br>";
 echo "Nombres: ".$nombre."<br>";
 echo "Apellidos: ".$apellido."<br>";
 echo "Estracto: ".$estracto."<br>";
 echo "Ingreso mensual: ".$salario."<br>";
 echo "Grupo asignado: ".$nivel."<br>";


?>