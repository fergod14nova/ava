<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css" type="text/css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <style>
        .navbar {
            font-family: 'Bebas Neue', cursive;
        }
        
    </style>

    <!-- Aqui vai ficar a parte da autenticação do usuário -->

</head>
<body>

        <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <a class="navbar-brand" href="aut.php">

            <!-- imagem do usuário -->
            <img src="img/icon.png" class="circle-user">
            
            <!-- nome do usuário -->
            Jorge Luiz de Alencar
        </a>

        <!-- Botão para mostrar menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

            <!-- MENU DE NAVEGAÇÃO -->
            <ul class="navbar-nav mr-auto mt-2 mt-xl-0">
                            
                <li class="nav-item active">
                    <a class="nav-link" href="#">Cursos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Mensalidades</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Frequencia</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Configurações</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sair</a>
                </li>
            </ul>

            <!-- Formulário de pesquisa -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
        </nav>

</body>
</html>