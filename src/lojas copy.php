
<!doctype html>
<html lang="pt-br" Xmanifest="appcache.manifest">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mack Bússola</title>
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
			<a href="index.html"><i class="material-icons waves-effect waves-light waves-circle">arrow_back</i></a>
		</div>

        <h5 class="titulo">Mack Bússola</h5>

        <div>
            <i class="material-icons waves-effect waves-light
                      waves-circle dropdown-button"
                data-activates="submenu" data-gutter="5"
                data-constrainwidth="false">
                    more_vert
            </i>

            <ul id="submenu" class="dropdown-content">
            	<li><a class="black-text" href="admin.html">Área do Administrador</a></li>
            	<li><a class="black-text" href="sobre.html">Sobre o APP</a></li>
            </ul>
        </div>
    </div>

    <ul class="tabs amber darken-2">


			        <li class="tab">
			            <a href="#faculdades"
			               class="white-text waves-effect waves-light">
			                Faculdades
			            </a>
			        </li>
				
			        <li class="tab">
			            <a href="#restaurante"
			               class="white-text waves-effect waves-light">
			                Restaurantes
			            </a>
			        </li>
				
		<div class="indicator"></div>
    </ul>
</div>


		<div id="faculdades" class="section">

            <?php
            // conctando ao BD
            include "conecta_mysql.php";

            // executando a operação de SQL
            $resultado = mysqli_query($conn, "SELECT faculdade_nomecurto, faculdade_nomelongo, faculdade_url, loja_nomecurto, loja_nomelongo, loja_url  from faculdades, restaurantes") or die("Não foi possível executar a SQL: ".mysqli_error($conn));
            if($resultado){
                while($row = mysqli_fetch_array($resultado) ){

                    echo "<div class=\"collection\"><a class=\"collection-item waves-effect black-text\" href=\"{$row["faculdade_url"]}\">" .$row["faculdade_nomecurto"]." - ".$row["faculdade_nomelongo"]."</a></div>";

                }
            }
            // fechamento da conexão
            mysqli_close($conn);
            ?>


	</div>
	
		<div id="restaurante" class="section">

			<div class="collection">

				<a class="collection-item waves-effect black-text"
				   href="loja-bobs.html">Bob's</a>

			</div>

			<div class="collection">

				<a class="collection-item waves-effect black-text"
				   href="loja-starbucks.html">Starbucks Coffee</a>

			</div>

			<div class="collection">

				<a class="collection-item waves-effect black-text"
				   href="loja-benjamin.html">Benjamin</a>

			</div>

			<div class="collection">

				<a class="collection-item waves-effect black-text"
				   href="loja-college.html">College</a>

			</div>

			<div class="collection">

				<a class="collection-item waves-effect black-text"
				   href="loja-spremuto.html">Spremuto</a>

			</div>

			<div class="collection">

				<a class="collection-item waves-effect black-text"
				   href="loja-mrcheney.html">Mr Cheney Cookies</a>

			</div>

			<div class="collection">

				<a class="collection-item waves-effect black-text"
				   href="loja-koni.html">Koni Store</a>

			</div>

	</div>
	

</main>

</div><!--/.current-page-->

<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/materialize-0.97.0.min.js"></script>
<script src="js/spa.js"></script>
<script src="js/main.js"></script>
<script src="js/install.js"></script>

</body>
</html>

