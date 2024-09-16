<?php 
session_start();
if($_SESSION["acesso"]==false){
    header("location:index.php");
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDM</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="imagem/png" href="img/fieblogo3.png">

</head>
<body>
    <div class="container">
        <h1>Início</h1>
        <div class="button-grid">
            <button onclick="navigateTo('index.php')">Sair</button>
            <button onclick="navigateTo('page1.php')">Cardápio</button>
            <button onclick="navigateTo('page2.php')">Feedback</button>
            
            
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>