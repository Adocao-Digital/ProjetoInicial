<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu cadastro</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_cadastro.css">
    <link rel="icon" type="image/x-icon" href="img/dogo-argentino.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Início do cabeçalho -->

    <!-- Fim do cabeçalho -->
    <div class="caixa-total">


        <div class="caixa-direita">
            <div class="form">
                <h1>Registrar-se</h1>
                <label for="inome" class="padding">Nome completo:
                    <input type="text" id="itext" class="estilo-forms" placeholder="Digite seu nome completo..." required></label>
                <label for="iemail">E-mail:
                    <input type="text" id="iemail" class="estilo-forms" placeholder="Digite seu e-mail..." required></label>
                <label for="ipassword">Sexo:
                    <select name="select" required class="sexoform"></label>
                <option value=""  disabled selected >Selecione...</option>
                <option value="valor2">Masculino</option>
                <option value="valor3">Feminino</option>
                <option value="valor4">Não-binário</option>
                <option value="valor5">Prefiro não informar</option>
                </select>
                <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                <label for="iemail">Selecione sua data de nascimento:<br>
                <label for="dia:" >Dia:</label>
        <select id="dia" name="dia" class="dia" >
            <option value="" disabled selected>Selecione o dia</option>
        </select>

        <label for="mes">Mês:</label>
        <select id="mes" name="mes" class="mes">
            <option value="" disabled selected>Selecione o mês</option>
            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>

        <label for="ano">Ano:</label>
        <select id="ano" name="ano" class="ano">
            <option value="" disabled selected>Selecione o ano</option>
        </select>

        <button type="submit" id="ok">Ok</button><br>   
                <label for="ipassword">Digite sua senha:
                    <input type="password" id="ipassword" class="estilo-forms" placeholder="Digite sua senha..." required>
                </label><br>
                <label for="iconfirm">Confirme sua senha:
                    <input type="password" id="iconfirm" class="estilo-forms" placeholder="Confirme sua senha..." required>
                </label>
                <div class="cad">
                    <button type="submit">Cadastrar</button>
                </div>
            </div>

        </div>
        <div class="caixa-esquerda">
            <div class="titulo-cadastro">
                <h1>Já se registrou?</h1>
            </div>
            <h2>Seja bem-vindo de volta! <br /> Venha fazer a diferença <br />conosco.</h2>
            <div class="botao-entrar">
                <a href="login.php">Entrar</a>
            </div>
        </div>
    </div>

    <script src="js/script-ativo.js"></script>
    <script src="js/script-cad.js"></script>
</body>
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="js/form.js" defer></script>
</html>