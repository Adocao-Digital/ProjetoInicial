<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu cadastro</title>
    <link rel="stylesheet" href="css/style-pet.css">
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
    <div class="caixa-direita">
        <div class="form">
            <h1>Registre seu Pet!</h1>
            <label for="inome" class="padding">Nome do pet:</label>
            <input type="text" id="itext" class="estilo-forms" placeholder="Digite o nome do seu pet..." required>
            <label for="iemail">Idade:</label>
            <input type="text" id="iemail" class="estilo-forms" placeholder="Digite a idade do seu pet..." required>
            <label for="ipassword">Sexo:</label>
                <select name="select" required>
                <option value="valor1">Selecione...</option>
                <option value="valor2">Macho</option>
                <option value="valor3">Fêmea</option>
              </select>
            <label for="iconfirm">Peso:</label>
            <input type="password" id="iconfirm" class="estilo-forms" placeholder="Digite o peso atual do seu pet..." required>
            <div class="cad">
                <button type="submit">Cadastrar</button>
            </div>
        </div>
    </div>
</div>
<script src="js/script-ativo.js"></script> 
</body>
<footer>
    <?php
        require_once 'footer.html';
    ?>
</footer>
</html>
