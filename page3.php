<?php
include('phpqrcode/qrlib.php'); 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Controle e Desperdiço da Merenda</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Controle e Desperdiço da Merenda</h1>
    
    <div class="qr-container">
        <h2>QR Code para Alunos</h2>
        <?php
        $alunoText = 'http://example.com/aluno'; 
        QRcode::png($alunoText, 'aluno.png');
        echo '<img src="aluno.png" alt="QR Code para Alunos">';
        ?>
    </div>

    <div class="qr-container">
        <h2>QR Code para Visitantes</h2>
        <?php
        $visitanteText = 'http://example.com/visitante'; 
        QRcode::png($visitanteText, 'visitante.png');
        echo '<img src="visitante.png" alt="QR Code para Visitantes">';
        ?>
    </div>
    
    <script src="qr_script.js"></script>
</body>
</html>
