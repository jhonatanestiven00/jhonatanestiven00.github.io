<!DOCTYPE html>
<html>
<head>
<title>Sisben</title>
<style type="text/css">
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.a {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

div.img{
background-image: url("imagenes/fondo.png");
background-size: 700px; 
background-repeat: no-repeat;
width: 750px;
height: 500px;
margin-left: 650px;
}

div.p{
    font-family: Arial, Helvetica, sans-serif;
    font-size:18px;
    padding: 20px;
    margin-top: 50px;
    margin-left: 30px;
    float: left;
    width: 500px;
    
}

li {
  float: left;
}

a.desarrolladores{
    margin-left: 550px;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 25px 15px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: red;
  
}
h2{
    text-align: center;
}
</style>
</head>
<body>


<ul class="a">
  <li><a class="active" href="ingreso/ingreso.php">Registrar nuevo usuario</a></li>
  <li><a href="ConsultaID/consultaID.php">Consultar datos </a></li>
  <li><a href="estadisticas/torta.php">Consultar estadisticas de usuarios registrados</a></li>
  <li><a class="desarrolladores" href="../bitnami.css">Desarrolladores</a></li>
</ul>

<div class="p">
<p>
    
    <h2>Sisben</h2>
    El sisben  permite  a las familias colombianas en mayor estado de vulnerabilidad aceder
    a algunos de los beneficios otorgados por el gobierno colombiano, entre estos beneficios:
    salud,estudio,ingreos adicionales.<br><br>
    Si aun no estas registrado, puedes registrar tus datos dando click en el boton de registro en la
    parte superior de la pagina.<br>
    Si deseas consultar tus datos almacenados en la base de datos y tu situacion de vulnerabilidad , 
    debes de ingresar en el boton de consulta.<br>
    Los administradores pueden acceder a los datos de las variables estadisticas de las personas 
    seleccionadas en los diferentes estados de vulnerabilidad.


</p>

</div>
<div class="img"></div>
<?php
    $contador=0;
    include("conex.php");
    $var_consulta= "SELECT * FROM sisben ;";
    $link=conectarse();
    $resultado=$link->query($var_consulta);
    
    while($row = $resultado->fetch_assoc()) {
        if($row['Id']){
            $contador= $contador+1;
            
        }
    }
   session_start();
    $a=array($contador);
    $_SESSION["sesion"]=$a;
    echo "Numero de usuarios regisrtrados: ".$a[0];
    ?>

</body>
</html>
