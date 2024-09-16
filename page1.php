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
    <title>Cardápio Escolar</title>
    <link rel="stylesheet" href="css/cardapio.css">
    <link rel="shortcut icon" type="imagem/png" href="img/fieblogo3.png">

</head>
<body>
    <div class="container">
        <form id="menuForm">
            <label for="date">Data:</label>
            <input type="date" id="date" required>
            <label for="food">Alimento:</label>
            <input type="text" id="food" required>
            <label for="nutrition">Valores Nutricionais:</label>
            <textarea id="nutrition" required></textarea>
            <button type="submit">Adicionar</button>
        </form>
        <div id="menuList">
            <h2>Cardápio</h2>
            <ul></ul>
            <button onclick="navigateTo('entrada.php')">Voltar</button>
        </div>
    </div>
    <script src="js/cardapio.js"></script>
    <script src="js/script.js"></script>
</body>
</html>