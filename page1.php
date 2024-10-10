<?php 
$alerta="";
$data="";
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
        <form id="menuForm" method="POST" action="page1.php"  >
        <?php
            if($alerta<>"")
            {
                echo "<h4 style='color: green; font-weight: bold'>".$alerta."</h4>";
            }
            ?>
            <label for="date">Data:</label>
            <input name="data" type="date" id="date" required>
            <label for="food">Alimento:</label>
            <input type="text" id="food" required>
            <label for="nutrition">Valores Nutricionais:</label>
            <textarea id="nutrition" required></textarea>
            <button name="adicionar"  type="submit">Adicionar</button>
        </form>
        <div id="menuList">
            <h2>Cardápio</h2>
            <table>
            <tr>
                <td> Data </td>
                <td> Alimento </td>
                <td> Valores Nutri </td>    
            </tr> 
            <tr>
                <td>  </td>
                <td>  </td>
                <td>  </td>    
            </tr>    
            </table>
            <ul></ul>
            <button onclick="navigateTo('entrada.php')">Voltar</button>
        </div>
    </div>
    <!-- <script src="js/cardapio.js"></script> -->
    <script src="js/script.js"></script>
</body>
</html>