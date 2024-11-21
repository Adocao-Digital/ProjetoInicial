<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-cadastro.css">
    <link rel="stylesheet" href="css/style-footer.css">
    <link rel="stylesheet" href="css/style-header.css">
    <link rel="icon" type="image/x-icon" href="img/dogo-argentino.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Início do cabeçalho -->
    <?php
        require_once 'header.html';
    ?>
    <!-- Fim do cabeçalho -->
<div class="caixa-total">
    <div class="caixa-esquerda">
        <div class="titulo-cadastro">
            <h1>Já se registrou?</h1>
        </div>
    <h2>Seja bem-vindo de volta! <br/> Venha fazer a diferença <br/>conosco.</h2>
        <div class="botao-entrar">
            <a href="login.php">Entrar</a>
        </div>
    </div>
    <div class="caixa-direita">
        <div class="form">
            <h1>Registrar-se</h1>
            <label for="inome" class="padding">Nome completo:</label>
            <input type="text" id="itext" class="estilo-forms" placeholder="Digite seu nome completo..." required>
            <label for="iemail">E-mail:</label>
            <input type="text" id="iemail" class="estilo-forms" placeholder="Digite seu e-mail..." required>
            <label for="ipassword">Digite sua senha:</label>
            <input type="password" id="ipassword" class="estilo-forms" placeholder="Digite sua senha..." required>
            <button type="button" class="mostrar-senha" onclick="toggleSenha()"><img src="img/closed-eye.png" alt="Olho Fechado" id="imgSenha"></button>
            <label for="iconfirm">Confirme sua senha:</label>
            <input type="password" id="iconfirm" class="estilo-forms" placeholder="Confirme sua senha..." required>
            <button type="button" class="confirm-senha" onclick="toggleSenha2()"><img src="img/closed-eye.png" alt="Olho Fechado" id="imgSenhaConfirm"></button>
            <div class="cad">
                <button type="submit">Cadastrar</button>
            </div>
        </div>
    </div>
</div>
<script src="js/script-ativo.js"></script> 
<script src="js/script-cad.js"></script>
</body>
<footer>
    <?php
        require_once 'footer.html';
    ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>