<!DOCTYPE html>
<html>
<head>
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
        <li><a href="#"><i class="material-icons">beenhere</i></a></li>
        <li><a href="#"><i class="material-icons">contacts</i></a></li>
        <li><a href="#"><i class="material-icons">donut_small</i></a></li>
        <li><a href="#"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>
	<div class="row">
		<center>
			<div class="col s3"></div>
		<div class="col s6">
			<h1>Iniciar Sesión</h1>
			<form method="POST" action="?c=Usuario&a=Validar">
      <div class="input-field">
      <i class="material-icons prefix">email</i>
      <input type="Email" name="Email" id="Email" required="Por favor rellene este campo">
      <label for="Email">Email</label>
      </div>
       <div class="input-field">
      <i class="material-icons prefix">lock_open</i>
      <input type="Password" name="Password" id="Password" required="Por favor rellene este campo">
      <label for="Password">Password</label>
      </div>
        	<input type="submit" value="Aceptar" class="btn waves-effect waves-light green">
        	<!--<input  class="btn waves-effect waves-light" type="submit" name="action">Guardar
    		-->
    		
  			</input>
			</form>
		</div>
    </div>
    </div>
	</center>






  
        

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
<br><br><br><br>
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