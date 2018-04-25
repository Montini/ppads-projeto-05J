<?php
	session_start();
    session_destroy(); //para matar a sessão
    session_write_close(); 
    $nome = $_SESSION['usuarioNome'];
    if(isset($nome)){
    echo "<h1>Você está logado como: ".$nome."</h1>";
    }else{
      session_destroy(); 
      header("Location: login.php"); // Não logado
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gerenciamento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
    <h2>Gerenciamento</h2>

<!--    <form action="crud.php" method="POST">-->
    <form action="seleciona.php" method="POST">

        <input type="submit" class="btn btn-info" name="tipoCRUD" value="incluir" checked/><br/><br/>
        <input type="submit" class="btn btn-info" name="tipoCRUD" value="editar" checked/><br/><br/>
        <input type="submit" class="btn btn-info" name="tipoCRUD" value="excluir" checked/><br/>

    </form>
<button onclick="history.go(-1);">Voltar</button>
</div>

</body>
</html>
