<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap"
     rel="stylesheet">
    <link rel="stylesheet" href="css/style-login.css">
    <link rel="stylesheet" href="css/style-footer.css">
    <link rel="stylesheet" href="css/style-header.css">
</head>
<body>
    <!-- Início do cabeçalho -->
    <?php
        require_once 'header.html';
    ?>
    <!-- Fim do cabeçalho -->
    <main>
        <div class="conteudo-login">
            <div class="login">
            <b> <h1>Fazer Login</h1> </b>
            <div class="controle">
                <img class="img-person" src="img/usuario.png">
                <label for="usuario">
                    <input class="bx" type="text" id="usuario" placeholder="Digite seu usuario.." required>
                </label>
            </div>

            <div class="controle">
                <img class="img-lock" src="img/senha.png">
                <label for="senha">
                    <input class="bx" type="password" id="senha" placeholder="Digite sua senha..." required>
                    <button type="button" class="mostrar-senha" onclick="toggleSenha()"><img src="img/closed-eye.png" alt="Olho Fechado" id="imgSenha"></button>
                </label>
            </div>

            <div class="controle-login">
                <!-- <img class="logout" src="img/logout.png"> -->
                <input class="bxlogin" type="button" id="login" value="Login" required >
            </div>
            
            <p class="parag">Esqueci minha senha</p>

            <a href="cadastro.php">
                <div id="reg">Registrar</div>
            </a>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
    <script src="js/script-ativo.js"></script>
</body>
<footer>
    <?php
        require_once 'footer.html';
    ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>