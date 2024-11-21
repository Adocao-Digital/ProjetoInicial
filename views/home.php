<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Controle de Zoonoses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-index.css">
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
        require_once 'models/conexao.class.php';
        require_once 'header.html';
    ?>
    <!-- Fim do cabeçalho -->
<main>
    <div class="box">
        <div class="slide-button">
            <input type="radio" class="slide-controller" name="slide" checked />
            <input type="radio" class="slide-controller" name="slide" />
            <input type="radio" class="slide-controller" name="slide" />
            <div class="slide-show" >
                <ul class="slides-list" >
                    <li class="slide1" >
                        <img src="img/animal1.avif" /><img src="img/animais5.avif" />
                    </li>
                    <li class="slide2" >
                        <img src="img/animal2.webp" />
                    </li>
                    <li class="slide2" >
                        <img src="img/animal3.avif" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
        <div class="separa">
            <div class="caixa1">
                <a href="/CCZ/adotar"><img src="img/pets.png"></a>
                <a href="/CCZ/adotar"><p>Encontre seu melhor amigo</p></a>
            </div>  
            <div class="caixa1">   
                <a href="/CCZ/cadastro-pet"><img src="img/form.png"></a>
                <a href="/CCZ/cadastro-pet"><p>Registre seu pet</p></a>
            </div>
            <div class="caixa1">
                <a href="/CCZ/cadastro"><img src="img/registrese.png"></a>
                <a href="/CCZ/cadastro"><p>Faça seu cadastro</p></a>
            </div>   
            <div class="caixa1">
                <a href="https://barrabonita.sp.gov.br" target="_blank"><img src="img/prefeitura.png"></a>
                <a href="https://barrabonita.sp.gov.br" target="_blank"><p>Site da prefeitura</p></a>
            </div>
        </div>      
    </main>
    <script src="js/script-ativo.js"></script> 
    <script src="js/carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
    <?php
        require_once 'footer.html';
    ?>
</html>
