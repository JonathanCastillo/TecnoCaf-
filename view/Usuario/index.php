<!DOCTYPE html>
<html>
<?php
session_start();
if (@!$_SESSION['Usuario']) {
   // header("Location:Login.php");
    //Para cuando el perfil sea visitado por alguien mas
    //header("Location:Perfil2.php");
}
?>
<head>
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/materialize/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="assets/css/GeneralStyle.css">
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
        <li><a href="#"><i class="material-icons">beenhere</i></a></li>
        <li><a href="?c=Usuario&a=UserList"><i class="material-icons">contacts</i></a></li>
        <li><a href="?c=Usuario&a=MonitorStandar"><i class="material-icons">donut_small</i></a></li>
        <li><a href="?c=Usuario&a=System"><i class="material-icons">device_hub</i></a></li>
        <li><a href="#"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>
	<div class="row">
		<center>
			<div class="col s3"></div>
		<div class="col s6">
      <div class="panel green darken-3">
			<h1 class="white-text text-darken-2">Nuevo Invernadero</h1>
      </div>
			<form method="POST" action="?c=Usuario&a=RegistrarInvernadero">
			<div class="input-field">
			<i class="material-icons prefix">spellcheck</i>
			<input type="text" name="Nombre" id="Nombre" required="Por favor rellene este campo">
			<label for="Nombre">Nombre del Invernadero</label>
			</div>
			<div class="input-field">
			<i class="material-icons prefix">beenhere</i>
			<input type="text" name="Tipo" id="Tipo" required="Por favor rellene este campo">
			<label for="Tipo">Tipo</label>
			</div>
      <div class="input-field">
      <i class="material-icons prefix">border_top</i>
      <input type="text" name="Ancho" id="Ancho" required="Por favor rellene este campo">
      <label for="Ancho">Ancho</label>
      </div>
      <div class="input-field">
      <i class="material-icons prefix">border_vertical</i>
      <input type="text" name="Largo" id="Largo" required="Por favor rellene este campo">
      <label for="Largo">Largo</label>
      </div>
      <div class="input-field">
      <i class="material-icons prefix">border_clear</i>
      <input type="text" name="Capacidad" id="Capacidad" required="Por favor rellene este campo">
      <label for="Capacidad">Capacidad</label>
      </div>
			<div class="input-field col s12">
			<i class="material-icons prefix">mode_comment</i>
         	<textarea id="Detalles" name="Detalles" class="materialize-textarea" required="Por favor rellene este campo"></textarea>
         	<label for="Detalles">Detalles</label>
        	</div>
          
        	<input type="submit" value="Aceptar" class="btn waves-effect waves-light red darken-4">
        	<!--<input  class="btn waves-effect waves-light" type="submit" name="action">Guardar
    		-->
    		
  			</input>
			</form>
		</div>
	</center>





  <div class="row" id="Secciones">
    <center>
    <div class="col s12">
      <div class="panel green darken-3">
    <h1 class="white-text text-darken-2">Modelos</h1>
      </div>
    </div>
    </center>
    <?php foreach($this->model->ListarTransaccion() as $r): ?>
    <div class="col s12 m5">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/invernadero.png" class="Invernadero">
          <span class="card-title"><b><?php echo $r->Nombre_Invernadero; ?></b></span>
        </div>
        <div class="card-content">
          <p><b>Detalles: </b><?php echo $r->Detalles; ?></p>
          <p><b>Ancho (m): </b><?php echo $r->Ancho; ?></p>
          <p><b>Largo (m): </b><?php echo $r->Largo; ?></p>
          <p><b>Capacidad (m): </b><?php echo $r->Capacidad; ?></p>
        </div>
        <div class="card-action">
          <a href="#">Editar <?php echo $r->Nombre_Invernadero; ?></a>
        </div>
      </div>
    </div>
     <?php endforeach; ?> 
  </div>
        

<script>
	$(document.ready(function)
	{
		$('select').material_select();
		$('.datepicker').pickadate();
	}
	);

</script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

        <footer class="card-panel green darken-1>
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