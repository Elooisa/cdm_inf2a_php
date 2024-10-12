// Funções para a navegação e exibição de formulários
function navigateTo(page) {
    window.location.href = page;
}

document.getElementById('forgotPassword').addEventListener('click', function() {
    document.querySelector('.login-form').style.display = 'none';
    document.querySelector('.forgot-password-form').style.display = 'block';
});

document.getElementById('register').addEventListener('click', function() {
    document.querySelector('.login-form').style.display = 'none';
    document.querySelector('.register-form').style.display = 'block';
});

document.getElementById('backToLogin').addEventListener('click', function() {
    document.querySelector('.forgot-password-form').style.display = 'none';
    document.querySelector('.login-form').style.display = 'block';
});

document.getElementById('backToLoginFromRegister').addEventListener('click', function() {
    document.querySelector('.register-form').style.display = 'none';
    document.querySelector('.login-form').style.display = 'block';
});

// Funções para conectar com os endpoints do backend

// Funções para Usuario
async function createUsuario(usuario) {
    const response = await fetch('http://localhost:8080/api/usuarios', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(usuario)
    });
    return response.json();
}

async function getUsuarioByEmail(email) {
    const response = await fetch(`http://localhost:8080/api/usuarios/email?email=${email}`);
    return response.json();
}

// Funções para Qrcode
async function createQrcode(qrcode) {
    const response = await fetch('http://localhost:8080/api/qrcodes', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(qrcode)
    });
    return response.json();
}

async function getQrcodeById(id) {
    const response = await fetch(`http://localhost:8080/api/qrcodes/${id}`);
    return response.json();
}

// Funções para Acesso
async function createAcesso(acesso) {
    const response = await fetch('http://localhost:8080/api/acessos', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(acesso)
    });
    return response.json();
}

async function getAcessoById(id) {
    const response = await fetch(`http://localhost:8080/api/acessos/${id}`);
    return response.json();
}

// Funções para Cardapio
async function createCardapio(cardapio) {
    const response = await fetch('http://localhost:8080/api/cardapios', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(cardapio)
    });
    return response.json();
}

async function getCardapioById(id) {
    const response = await fetch(`http://localhost:8080/api/cardapios/${id}`);
    return response.json();
}

// Exemplo de funções para submissão de formulários

async function submitUsuarioForm() {
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;

    const usuario = { nome, email, senha };
    const response = await createUsuario(usuario);
    console.log(response);
}

async function submitQrcodeForm() {
    const usuarioId = document.getElementById('usuarioId').value;
    const dataPresenca = document.getElementById('dataPresenca').value;

    const qrcode = { usuarioId, dataPresenca };
    const response = await createQrcode(qrcode);
    console.log(response);
}

async function submitAcessoForm() {
    const usuarioId = document.getElementById('usuarioId').value;
    const dataHora = document.getElementById('dataHora').value;

    const acesso = { usuarioId, dataHora };
    const response = await createAcesso(acesso);
    console.log(response);
}

async function submitCardapioForm() {
    const nome = document.getElementById('nome').value;
    const data = document.getElementById('data').value;

    const cardapio = { nome, data };
    const response = await createCardapio(cardapio);
    console.log(response);
}


//document.getElementById('loginForm').addEventListener('submit', function(event) {
    //event.preventDefault();
    //navigateTo('login.php');
//});