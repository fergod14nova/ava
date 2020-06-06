<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SlideBar</title>

    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .carousel-caption {
            font-family: 'Piedra', cursive;
        }
        .link {
            color: white;
            text-decoration: none;
            text-transform: uppercase;
        }
        .carrousel-link{
            font-family: Arial;

        }
        .carrousel-title{
            font-family: Arial;
        }
        
    </style>
    
</head>
<body>

    <!-- Criação da apresentação de slide -->
    <div id="Apresentacao" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#Apresentacao" data-slide-to="0" class="active"></li>
            <li data-target="#Apresentacao" data-slide-to="1"></li>
            <li data-target="#Apresentacao" data-slide-to="2"></li>
            <li data-target="#Apresentacao" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="img/slide/1.png">
                <div class="carousel-caption d-md-block">

                    <h5 class="carrousel-title">Não deixe de fazer as atividades disponíveis no AVA</h5>
                    <p class="carrousel-link">Acesse o calendário das atividades clicando
                        <a href="#">aqui</a>
                    </p>

                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/slide/2.png">
                <div class="carousel-caption d-md-block">

                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/slide/3.png">
                <div class="carousel-caption d-md-block">

                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/slide/4.png">
                <div class="carousel-caption d-md-block">

                </div>
            </div>
        </div>

        <!-- <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Segundo Slide" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Terceiro Slide" alt="Terceiro Slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Quarto Slide" alt="Quarto Slide">
            </div>
        </div> -->

        <!-- CONTROLES -->
        <a class="carousel-control-prev" href="#Apresentacao" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#Apresentacao" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>

    </div>

</body>
</html>