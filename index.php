<?php
session_start();
$email=$_REQUEST["email"]??"";
$senha=$_REQUEST["senha"]??"";
echo $email;
echo $senha;
if($email== "fulano@gmail.com" && $senha== "123456"){
    $_SESSION["acesso"]=true;
    header("location:entrada.php");
    exit();
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
        <div class="login-form">
            <h2>Login</h2>
            <form id="loginForm" method="POST" action="index.php">
                <input name="email" type="text" id="u" placeholder="Email" required>
                <input name="senha" type="password" id="password" placeholder="Senha" required>
                <button type="submit">Entrar</button>
            </form>
            <a href="#" id="forgotPassword">Esqueceu a senha?</a>
            <a href="#" id="register">Primeiro acesso? Cadastre-se</a>
        </div>
        <div class="forgot-password-form" style="display: none;">
            <h2>Recupere sua senha </h2>
            <form id="forgotPasswordForm">
                <input type="email" id="email" placeholder="Email Institucional" required>
                <button type="submit">Enviar</button>
            </form>
            <a href="#" id="backToLogin">Voltar ao Login</a>
        </div>
        <div class="register-form" style="display: none;">
            <h2>Cadastro</h2>
            <form id="registerForm">
                <input type="text" id="newUsername" placeholder="RM" required>
                <input type="email" id="newEmail" placeholder="Email Institucional" required>
                <input type="password" id="newPassword" placeholder="Crie sua senha" required>
                <input type="password" id="newPassword" placeholder="Confirme a senha" required>
                <button type="submit">Cadastrar</button>
            </form>
            <a href="#" id="backToLoginFromRegister">Voltar ao Login</a>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
<?php
session_destroy();


?>