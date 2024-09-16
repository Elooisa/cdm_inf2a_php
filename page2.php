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
    <title>Avaliação de Comentários</title>
    <link rel="stylesheet" href="css/feedback.css">
    <link rel="shortcut icon" type="imagem/png" href="img/fieblogo3.png">
</head>
<body>
    <div class="container">
        <div id="feedbackList">
            <h2>Comentários</h2>
            <ul id="comments">
                <li>Aluno 1: A comida estava ótima! - Avaliação: 5 estrelas</li>
                <li>Aluno 2: Poderia ter mais opções de frutas. - Avaliação: 3 estrelas</li>
                <li>Aluno 3: O café estava muito doce. - Avaliação: 2 estrelas</li>
            </ul>
        </div>
        <div id="categories">
            <div id="relevantes">
                <h3>Relevantes</h3>
                <ul></ul>
            </div>
            <div id="naoRelevantes">
                <h3>Não Relevantes</h3>
                <ul></ul>
            </div>
            <div id="aAvaliar">
                <h3>A Avaliar</h3>
                <ul></ul>
                <button onclick="navigateTo('entrada.php')">Voltar</button>
            </div>
        </div>
    </div>
    <script src="js/feedback.js"></script>
    <script src="js/script.js"></script>
</body>
</html>