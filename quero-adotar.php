<!-- <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Controle de Zoonoses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-adotar.css">
    <link rel="stylesheet" href="css/style-footer.css">
    <link rel="stylesheet" href="css/style-header.css">
    <link rel="icon" type="image/x-icon" href="img/dogo-argentino.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>
<body>

    <div class="infos">
        <h2>Adote um amigo</h2>
    </div>

    <div class="corpo">
        <div class="filtros">
            <div class="filtro">
                <h3>Filtros</h3>
            </div>
            <div class="filtro">
                <h3>Espécie</h3>
            </div>
            <div class="filtro">
                <h3>Idade</h3>
            </div>
            <div class="filtro">
                <h3>Porte</h3>    
            </div>
            <div class="filtro">
                <h3>Sexo</h3>    
            </div>
        </div>

        <div class="pets">
            <div class="titulo">
                <h2>Pets disponíveis</h2>
            </div>
            <div class="animais">
                <div class="linha">
                    <div class="foto">
                        <h4>foto</h4>
                    </div>
                    <div class="foto">
                        <h4>foto</h4> 
                    </div>
                    <div class="foto">
                        <h4>foto</h4>
                    </div>
                </div>
                <div class="linha">
                    <div class="foto">
                        <h4>foto</h4>
                    </div>
                    <div class="foto">
                        <h4>foto</h4> 
                    </div>
                    <div class="foto">
                        <h4>foto</h4>
                    </div> 
                </div>
            </div>




        </div>
    </div>
    <script src="js/script-ativo.js"></script> 
</body>
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html> -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Controle de Zoonoses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-adotar.css">
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
    <div class="container infos">
    <h2>Adote um amigo!</h1>
    </div>
    <div class="container c-body">
        <!-- <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Filtros
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Espécie
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Gato
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Cachorro
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Idade
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Filhote
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckChecked">
                                Adulto
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckChecked">
                                Idoso
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Porte
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Pequeno
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckChecked">
                                Médio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckChecked">
                                Grande
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Sexo
                </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Macho
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckChecked">
                                Fêmea
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    Filtros
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Espécie
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="radio-group">
                            <div class="style__Radio-sc-1k188yz-10 esgxWX radio checked">
                                <input name="gato" type="radio" value="gato">
                                <label for="gato" class="radio-label">Gato</label>
                            </div>
                            <div class="style__Radio-sc-1k188yz-10 esgxWX radio ">
                                <input name="cachorro" type="radio" value="cachorro">
                                <label for="cachorro" class="radio-label">Cachorro</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Idade
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="radio-group">
                            <div class="style__Radio-sc-1k188yz-10 esgxWX radio checked">
                                <input name="idade" type="radio" value="filhote">
                                <label for="idade" class="radio-label">Filhote</label>
                            </div>
                            <div class="style__Radio-sc-1k188yz-10 esgxWX radio ">
                                <input name="idade" type="radio" value="adulto">
                                <label for="idade" class="radio-label">Adulto</label>
                            </div>
                            <div class="style__Radio-sc-1k188yz-10 esgxWX radio ">
                                <input name="idade" type="radio" value="idoso">
                                <label for="idade" class="radio-label">Idoso</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Porte
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                     <div class="radio-group">
                            <div class="style__Radio-sc-1k188yz-10 esgxWX radio checked">
                                <input name="porte" type="radio" value="pequeno">
                                <label for="porte" class="radio-label">Pequeno</label>
                            </div>
                            <div class="style__Radio-sc-1k188yz-10 esgxWX radio ">
                                <input name="porte" type="radio" value="medio">
                                <label for="porte" class="radio-label">Médio</label>
                            </div>
                            <div class="style__Radio-sc-1k188yz-10 esgxWX radio ">
                                <input name="porte" type="radio" value="grande">
                                <label for="porte" class="radio-label">Grande</label>
                            </div>
                        </div>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Sexo
                </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="radio-group">
                            <div class="style__Radio-sc-1k188yz-10 esgxWX radio checked">
                                <input name="gato" type="radio" value="gato">
                                <label for="gato" class="radio-label">Gato</label>
                            </div>
                            <div class="style__Radio-sc-1k188yz-10 esgxWX radio ">
                                <input name="cachorro" type="radio" value="cachorro">
                                <label for="cachorro" class="radio-label">Cachorro</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container animals">

        </div>
    </div>
</body>
<footer>
    <?php
        require_once 'footer.html';
    ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>