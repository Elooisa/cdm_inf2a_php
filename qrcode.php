<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de QR Codes</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="shortcut icon" type="imagem/png" href="img/fieblogo3.png">
</head>
<body>
</head>
<body>


<h1>Gerador de QR Codes</h1>
    <form id="qrForm">
        <input type="text" id="qrText" placeholder="Digite o texto aqui" required>
        <button type="button" onclick="generateQRCode('Aluno')">Gerar QR Code ALUNO</button>
        <button type="button" onclick="generateQRCode('Visitante')">Gerar QR Code VISITANTE</button>
    </form>
    
    <div id="qrCodes">
        <div class="qr-section">
            <h2>ALUNOS</h2>
            <div id="qrAluno"></div>
        </div>
        <div class="qr-section">
            <h2>VISITANTES</h2>
            <div id="qrVisitante"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
    <script>
        function generateQRCode(type) {
            var qrText = document.getElementById('qrText').value;
            var qrCodeSection = type === 'Aluno' ? 'qrAluno' : 'qrVisitante';

            if (qrText.trim() === '') {
                alert('Por favor, preencha o campo de texto.');
                return;
            }

            // Gera QR Code
            QRCode.toDataURL(qrText + ' - ' + type, function (err, url) {
                if (err) {
                    console.error(err);
                    return;
                }
                var img = document.createElement('img');
                img.src = url;
                img.classList.add('qrCode');
                var qrDiv = document.getElementById(qrCodeSection);
                qrDiv.innerHTML = ''; // Limpa o conteúdo anterior
                qrDiv.appendChild(img);
            });
        }
    </script>
</body>
</html>