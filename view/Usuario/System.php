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
			<div class="col s3"></div>
		<div class="col s6">
			
      <div class="panel green darken-3">
    <h1 class="white-text text-darken-2">Nuevo Sistema</h1>
      </div>
  
    

			<form method="POST" action="?c=Usuario&a=RegistrarSystem">
        <div class="row"> 
          <div class="col s12">
          <div class="input-field">
          <div class="input-field col s12">
            <select name="Id_Cliente">
              <option value="" disabled selected>Seleccione el cliente</option>
              <?php foreach($this->model->ListaClientes() as $r): ?>
              <option value="<?php echo $r->Id_Cliente; ?>" name="Id_Cliente"><?php echo $r->Nombre." ".$r->Apellido; ?></option>
              <?php endforeach; ?>
            </select>
            <label>Cliente</label>
          </div>
        </div>
          
        
        <div class="input-field">
          <div class="input-field col s12">
            <select  name="Id_Invernadero">
              <option value="" disabled selected>Seleccione el modelo de invernadero</option>
              <?php foreach($this->model->ListarTransaccion() as $r): ?>
              <option value="<?php echo $r->Id_Invernadero; ?>" name="Id_Invernadero"><?php echo $r->Nombre_Invernadero; ?></option>
              <?php endforeach; ?>    
            </select>
          <label>Modelo</label>
    <div class="input-field">
      <i class="material-icons prefix">filter_2</i>
      <input type="number" name="Unidades" id="Unidades" required="Por favor rellene este campo">
      <label for="Unidades">Número de unidades</label>
      </div>
    <div class="input-field">
      <i class="material-icons prefix">spellcheck</i>
      <input type="text" name="Nombre" id="Nombre" required="Por favor rellene este campo">
      <label for="Nombre">Nombre del Sistema</label>
      </div>
      <div class="input-field">
      <i class="material-icons prefix">mode_comment</i>
          <textarea id="Caracteristicas" name="Caracteristicas" class="materialize-textarea" required="Por favor rellene este campo"></textarea>
          <label for="Caracteristicas">Caracteristicas</label>
        </div>
  </div>
        </div>

        <br>
        <br>
          <input type="submit" value="Aceptar" class="btn waves-effect waves-light green">
          <!--<input  class="btn waves-effect waves-light" type="submit" name="action">Guardar
        -->
        
        </input>
        </div>
      </div>
			</form>
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
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/System.jpg" class="Cliente">
          <span class="card-title" id="TituloSystem"><b><?php echo $r->Nombre_System;?></b></span>
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