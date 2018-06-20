<!DOCTYPE html>
<html>
<head>
  <?php
session_start();
if (@!$_SESSION['Usuario']) {
    //header("Location:Login.php");
    //Para cuando el perfil sea visitado por alguien mas
    //header("Location:Perfil2.php");
}
?>
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/css/GeneralStyle.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/materialize/css/materialize.min.css"  media="screen,projection"/>
      <!-- Compiled and minified CSS -->
      <!-- Compiled and minified CSS -->
<!--Select works with these files:-->
<script src="//code.jquery.com/jquery-2.1.2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<!--The select didn't work for me with these files:-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
	<title></title>
</head>
<body">

<div class="Container">
	  <nav class="panel green darken-1">
    <div class="nav-wrapper">

      <a href="#!" class="brand-logo"><img src="assets/img/TecnoCafe.png" class="Logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><b><span><?php echo $_SESSION['user'];?></span></b></li>
        <li><a href="?c=Usuario&a=Inicio"><i class="material-icons">beenhere</i></a></li>
        <li><a href="#"><i class="material-icons">contacts</i></a></li>
        <li><a href="#"><i class="material-icons">donut_small</i></a></li>
        <li><a href="#"><i class="material-icons">device_hub</i></a></li>
        <li><a href="#"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>
	<div class="row">
		<center>
			<div class="col s2"></div>
		<div class="col s8">
			
      <div class="panel green darken-3">
    <h1 class="white-text text-darken-2">Monitor Standard</h1>
      </div>

  <table class="highlight">
        <thead>
          <tr>
              <th>Código</th>
              <th>Humedad</th>
              <th>Temperatura</th>
              <th>Nivel de Agua</th>
              <th>Número de actualizacion</th>
              <th>Observaciones</th>
              <th>Estado</th>
          </tr>
        </thead>

        <tbody>
           <?php foreach($this->model->ListarData1() as $r): ?>
          <tr>
            
            <td><?php echo "TC_EILA_".$r->U_Identify; ?></td>
            <td><?php echo $r->Humedad."%"; ?></td>
            <td><?php echo $r->Temperatura." °C"; ?></td>
            <td><?php echo $r->Nivel_Agua."%"; ?></td>
            <td><center><?php echo $r->Numero_Actualizacion; ?></center></td>
            <td><?php echo $r->Observaciones; ?></td>
            <td><?php if ($r->Estado==1) {
              echo "OK";
            } elseif ($r->Estado!=1) {
              echo "NO OK";
            }
            ?>
              
            </td>

          </tr>
           <?php endforeach; ?> 
          
        </tbody>
      </table>
            
    

			
		</div>
	</center>



  <div class="row" id="Secciones">
    <div class="col s12">
      <div class="panel green darken-3">
        <center>
    <h1 class="white-text text-darken-2">Sistemas</h1>
      </center>
      </div>
    </div>
    <?php foreach($this->model->ListarSistemas() as $r): ?>
    <div class="col s12 m5">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/invernadero.png" class="Invernadero">
          <span class="card-title"><b><?php echo $r->Nombre_System;?></b></span>
        </div>
        <div class="card-content">
          <p><b>Caracteristicas: </b><?php echo $r->Caracteristicas; ?></p>
          <p><b>Unidades: </b><?php echo $r->Numero_Unidades; ?></p>
          <p><b>Fecha: </b><?php echo $r->Fecha_Registro; ?></p>
        </div>
        <div class="card-action">
          <a href="#">Editar <?php echo $r->Nombre_System; ?></a>
        </div>
      </div>
    </div>
     <?php endforeach; ?> 
  </div>
        


 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>
 <script>

  $(document).ready(function(){
    $('select').material_select();

  });

</script>
</body>

        <footer class="panel green darken-1>
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Tecno-Café</h5>
                <p class="grey-text text-lighten-4">Sistema Inteligente de Invernaderos.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Youtube</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</html>