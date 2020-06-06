<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colaborar - AVA</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
        require __DIR__."/vendor/autoload.php";
        /*comentários*/


        include_once "header.php";
        /*include "../ava/paginas/carrousel.php";*/
    ?>
    <div class="container">
        <?php
            include_once "paginas/cursos.php";
        ?>

<!--        <h5>Frequência</h5>-->
<!--        -->
<!--        <h5>Mensalidades</h5>-->
<!--        -->
<!--        <h5>Meu Perfil</h5>-->

    </div>
</body>
</html>