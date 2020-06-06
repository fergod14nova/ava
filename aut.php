<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Tenali+Ramakrishna&display=swap" rel="stylesheet">

    <title>Login</title>
    <style>
        * {
            font-size: 15px;
            padding: 0;
            margin: 0;
        }
        
        .container{
            width: 100vw;
            height: 100vh;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: gainsboro;
            font-family: 'Roboto Condensed', sans-serif;
            display: flex;
            flex-direction: row;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="main">
            <h1>MILLENIUM FORMAÇÃO PROFISSIONAL</h1>

            <!-- Login -->
            <!-- Botão para acionar modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
            Login
            </button>


            <!-- Cadastro -->
            <!-- Botão para acionar modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastro">
            Cadastro
            </button>


        </div>
    </div>
</body>
</html>