<!doctype html>
<html lang="pt-br" Xmanifest="appcache.manifest">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FCI - Mack Bússola</title>
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


<?php

include "conecta_mysql.php";

$resultado = mysqli_query($conn, "SELECT faculdade_nomecurto, faculdade_nomelongo, descritivo, telefone, email, predio_numero, predio_nome from faculdades where id = '$_GET[pageid]'") or die("Não foi possível executar a SQL: ".mysqli_error($conn));
if($resultado){
    while($row = mysqli_fetch_array($resultado) ){

        echo "<div class='current-page'>";
        echo "<main class='loja'>";
	    echo "<div class='parallax-container'><a href='lojas.php'><i class='material-icons waves-effect waves-light waves-circle'>arrow_back</i></a>";
		echo "<div class='parallax'><img src='img/loja/fci.jpg' alt='FCI - Faculdade de Computação e Informática'></div></div>";
        echo "<div class='section white'><div class='row container'>";
        echo "<h2><a class='collection-item waves-effect black-text'>" .$row['faculdade_nomecurto']." - ".$row['faculdade_nomelongo']."</a></h2>";
        echo "<p class='grey-text text-darken-3 lighten-3'>".$row['descritivo']."</p>";
        echo "<p>Prédio: <strong>" . $row['predio_numero'] . " - " . $row['predio_nome'] . "</strong></p>";
        echo "<p>Telefone: <strong>" . $row['telefone'] . "</strong></p>";
        echo "<p>Email: <strong>" . $row['email'] . "</strong></p>";


        echo "<form action='confirma.php' method='post'>";
//      echo "<input type='text' name='sugestoes' placeholder='Sugerir alteração' maxlength='255'>";
        echo "<input type='hidden' name='pageid' value='$_GET[pageid]'>";
        echo "<input type='hidden' name='categoria' value='$_GET[categoria]'>";
        echo "<input type='text' name='sugestoes' placeholder='Sugerir alteração' maxlength='255'>";
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";

        echo "</div></div>";
        echo "</div></main></div>";

        }
    }

    mysqli_close($conn);
    ?>

<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/materialize-0.97.0.min.js"></script>
<script src="js/main.js"></script>
<script src="js/install.js"></script>

</body>
</html>