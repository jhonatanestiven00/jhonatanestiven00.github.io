<?php
session_start();
echo '<br>Usuarios registrados en el sistema: '.implode( ", ", $_SESSION["sesion"] ).'<br>';
?>
<!DOCTYPE html>
<head>
    <title>formulario de ingreso </title>
    <style type="text/css">
*{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
}
a{
   margin-left: 152px;
}
form{
   background-color: rgb(255, 255, 255,0.5); 
   max-width: 469px;
   height: 353px;
   padding: 15px;
   margin:auto;
   margin-top: 155px;
   border-radius: 4px;
   font-family: Arial, Helvetica, sans-serif;
   box-shadow: 7px 13px 37px #000;
}

h2{
   text-align: center;
   font-size: 22px;
   margin-bottom: 10px;  
}

input{
   width: 100%;
   padding: 7px;
   border-radius: 2px;
   margin-bottom: 14px;
   border: 1px solid black;
   font-family: Arial, Helvetica, sans-serif;
   font-size: 16px;
}

input[type=text]:hover , input[type=number]:hover{
background-color:lightgrey;


}

input[type=submit]:hover{
 background-color: green;
 color:white;
 cursor: pointer;
 border-radius: 4px;
}

input[type=submit]{  
  
  background-color: rgb(255, 255, 255);
  border-radius: 2px;
  font-weight: bold;
  margin-left:130px;
  margin-bottom: 5px; 
  width: 150px;  
}

div.img{
   width: 1000px;
   height: 600px;
   background-image: url("../imagenes/fondoingreso.png");
   background-repeat: no-repeat; 
   background-size: 800px; 
   margin-left: 270px;
   
}
div.form{
   width: 550px;
   margin-left:389px;
   float: left;

}


    </style>
</head>
<body>

   <div class="form">
    <form action="recibe.php" method="post">
    <h2>Ingrese los siguientes datos</h2>
    <input type="number" name="id" placeholder="Numero de documento" required><br>
    <input type="text" name="nombre" placeholder="Nombres" required><br>
    <input type="text" name="apellido" placeholder="Apellidos" required><br>
    <input type="number" name="estracto" placeholder="Estracto de la vivienda" required><br>
    <input type="number" name="salario" placeholder="Ingreso mensual" required><br>
    <input type="submit" value="Registrar" name="enviar"><br>
    <a href="../index.php"> Volver al inicio</a>
</form>
</div>
<div class="img"></div>
</body>



</html>