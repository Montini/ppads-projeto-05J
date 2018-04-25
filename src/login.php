<?php
	session_start();
?>
<!doctype html>
<html lang="pt-br" Xmanifest="appcache.manifest">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Área do Administrador</title>
    <meta name="description" content="Mack Bússola">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    
    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="img/icon.png">
    <meta name="theme-color" content="#F77F00">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Mack Bússola">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon-precomposed" href="img/icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="img/icon.png">
    <meta name="msapplication-TileColor" content="#F77F00">


</head>
<body>
<div class="current-page">


<main class="lojas">

<div class="topo-fixo z-depth-1">
    <div class="valign-wrapper amber darken-2 white-text">
		<div>
			<a href="lojas.php"><i class="material-icons waves-effect waves-light waves-circle">arrow_back</i></a>
		</div>

        <h5 class="titulo">Área do Administrador</h5>

        <div>
            <i class="material-icons waves-effect waves-light
                      waves-circle dropdown-button"
                data-activates="submenu" data-gutter="5"
                data-constrainwidth="false">
                    more_vert
            </i>

            <ul id="submenu" class="dropdown-content">
            	<li><a class="black-text" href="admin.php">Área do Administrador</a></li>
            	<li><a class="black-text" href="sobre.php">Sobre o APP</a></li>
            </ul>
        </div>
    </div>

    <ul class="tabs amber darken-2">

				
		<div class="indicator"></div>
    </ul>
</div>
    <div class="container">
        <div class="button-adm">
      <form class="form-signin" method="POST" action="valida_login.php">
        <label for="inputNome" class="sr-only">Nome</label>
        <input type="text" name="nome" id="inputNome" class="form-control" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" required>
        <button class="btn" type="submit">Entrar</button>
      </form>
	  <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
        </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	

</main>

</div><!--/.current-page-->

<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/materialize-0.97.0.min.js"></script>
<script src="js/spa.js"></script>
<script src="js/main.js"></script>
<script src="js/install.js"></script>

</body>
</html>
