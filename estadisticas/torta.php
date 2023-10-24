<?php
session_start();
echo '<br>Usuarios registrados en el sistema: '.implode( ", ", $_SESSION["sesion"] ).'<br>';
echo "<h2 style='text-align:center;' >Estadisticas de registro al sisben por grupos</h2>";
      $contadorGrupoA=0;
      $contadorGrupoB=0;
      $contadorGrupoC=0;

      include("../conex.php");
      $link=conectarse();

      $var_consulta= "SELECT * FROM sisben ;";
      $resultado=$link->query($var_consulta);
      
      while($row = $resultado->fetch_assoc()) {
          if($row['Grupo']=="A"){
              $contadorGrupoA= $contadorGrupoA+1;
              
          }
          if($row['Grupo']=="B"){
            $contadorGrupoB= $contadorGrupoB+1;
            
        }
        if($row['Grupo']=="C"){
            $contadorGrupoC= $contadorGrupoC+1;
            
        }
      }

      $array= array($contadorGrupoA,$contadorGrupoB,$contadorGrupoC);
?>
<!DOCTYPE html>
<html>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>

<div id="myPlot" style="margin:auto;width:100%;max-width:700px"></div>

<script>
var xArray = ["Grupo A", "Grupo B", "Grupo C", ];
var yArray = <?php echo '["' . implode('", "', $array) . '"]' ?>;

var layout = {title:"Grupos del Sisben"};

var data = [{labels:xArray, values:yArray, type:"pie"}];

Plotly.newPlot("myPlot", data, layout);
</script>

</body>
</html>