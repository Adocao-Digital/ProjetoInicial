<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-login.css">
</head>
<body>
    <main>
        <div class="conteudo-login">
            <div class="login">
                <h1>Fazer Login</h1>
                <form class="formulario">
                    <div class="controle">
                        <img class="img-person" src="img/usuario.png" alt="Ícone de usuário">
                        <input class="bx" type="text" id="usuario" placeholder="Digite seu e-mail..." required>
                    </div>
                    <div class="controle">
                        <img class="img-lock" src="img/senha.png" alt="Ícone de senha">
                        <input class="bx" type="password" id="senha" placeholder="Digite sua senha..." required>
                        <button type="button" class="mostrar-senha" onclick="toggleSenha()">
                            <img src="img/closed-eye.png" alt="Mostrar/Esconder senha" id="imgSenha">
                        </button>
                    </div>
                    <div class="controle-login">
                        <button class="bxlogin" type="submit">Login</button>
                    </div>
                </form>
                <p class="parag">Esqueci minha senha</p>
                <a href="cadastro.php" class="registro-link">Registrar</a>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>
