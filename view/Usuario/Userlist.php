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
        <li><a href="?c=Usuario&a=System"><i class="material-icons">device_hub</i></a></li>
        <li><a href="#"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>
	<div class="row">
		<center>
			<div class="col s3"></div>
		<div class="col s6">
			<center>
  
      <div class="panel green darken-3">
    <h1 class="white-text text-darken-2">Nuevo Cliente</h1>
      </div>
  
    </center>
			<form method="POST" action="?c=Usuario&a=RegistrarCliente">
			<div class="input-field">
			<i class="material-icons prefix">person</i>
			<input type="text" name="Nombre" id="Nombre" required="Por favor rellene este campo">
			<label for="Nombre">Nombre</label>
			</div>
			<div class="input-field">
			<i class="material-icons prefix">perm_identity</i>
			<input type="text" name="Apellido" id="Apellido" required="Por favor rellene este campo">
			<label for="Apellido">Apellido</label>
			</div>
      <div class="input-field">
      <i class="material-icons prefix">person_pin_circle</i>
      <input type="text" name="Domicilio" id="Domicilio" required="Por favor rellene este campo">
      <label for="Domicilio">Domicilio</label>
      </div>
      <div class="input-field">
      <i class="material-icons prefix">email</i>
      <input type="Email" name="Email" id="Email" required="Por favor rellene este campo">
      <label for="Email">Email</label>
      </div>
      <div class="input-field">
      <i class="material-icons prefix">phone</i>
      <input type="text" name="Telefono" id="Telefono" required="Por favor rellene este campo">
      <label for="Telefono">Telefono</label>
      </div>
        	<input type="submit" value="Aceptar" class="btn waves-effect waves-light green">
        	<!--<input  class="btn waves-effect waves-light" type="submit" name="action">Guardar
    		-->
    		
  			</input>
			</form>
		</div>
	</center>






  <div class="row" id="Secciones">
    <div class="col s12">
      <div class="panel green darken-3">
        <center>
    <h1 class="white-text text-darken-2">Clientes</h1>
      </center>
      </div>
    </div>
    <?php foreach($this->model->ListaClientes() as $r): ?>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/Clientes.jpg" class="Clientes">
          <span class="card-title"><b><?php echo $r->Nombre;?></b></span>
        </div>
        <div class="card-content">
          <p><b>Nombre: </b><?php echo $r->Nombre; ?></p>
          <p><b>Apellido: </b><?php echo $r->Apellido; ?></p>
          <p><b>Domicilio: </b><?php echo $r->Domicilio; ?></p>
          <p><b>Email: </b><?php echo $r->Email; ?></p>
          <p><b>Telefono: </b><?php echo $r->Telefono; ?></p>
        </div>
        <div class="card-action">
          <a href="#">Editar <?php echo $r->Nombre; ?></a>
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