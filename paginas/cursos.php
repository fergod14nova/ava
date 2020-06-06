<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cursos</title>

    <!--    ícones -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CDN FONT AWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
        <!-- TAMANHOS DOS IGONES DO CLOUDFLARE
        Tamanhos:
        w3-tiny
        w3-pequeno
        w3-large
        w3-xxlarge
        w3-xxxlarge
        w3-jumbo
        -->

    <!-- CSS E JS -->
    <style>
        .curso-box{
            /* Configuração do bloco do curso */
            display: block;
            background-color: darkblue;
            font-family: sans-serif;
            font-size: 10px;
            color: white;
            padding: 10px;
            margin: 0;
            text-align: center;

        }

        #detalhes {
            font-size: 15px;
            display: none;
            text-align: left;
        }
        #detalhes li{
            list-style: none;
        }

        
    </style>
        
</head>
<body onload="ocultardisplay()">

            <script>
                                                
                        // ------------Botão para exibir e ocultar detalhes
                    
                            function MudarEstado(variavel){
                                // a palavra variavel é um parámetro que será substituido pelo id
                                var display = document.getElementById(variavel).style.display;
                                var displayaula = document.getElementById('aulas').style.display = 'none'
                                    if(display == "none"){
                                        document.getElementById(variavel).style.display = 'block';
                                        var img = document.getElementById('folder')
                                        img.innerHTML = 'Detalhes <i class="fas fa-folder-open">'        
                                    } 
                                    else{
                                        document.getElementById(variavel).style.display = 'none';
                                        var img = document.getElementById('folder')
                                        img.innerHTML = 'Detalhes <i class="fas fa-folder">'
                                    }
                            }
                        // -------------------------------------------------------------------------------------- 
                        function MudarEstadoAula(variavel){
                            var display = document.getElementById(variavel).style.display; //seleção da tag html usando o ID da tag
                            var displaydetalhes = document.getElementById('detalhes').style.display = 'none'; //ocultando detalhes

                            if(display == "none"){
                                document.getElementById(variavel).style.display = 'block';
                                var img = document.getElementById('folderAula')
                                img.innerHTML = 'Aulas <i class="fas fa-folder-open">'
                                
                            }
                            else{
                                document.getElementById(variavel).style.display = 'none';
                                var img = document.getElementById('folderAula')
                                img.innerHTML = 'Aulas <i class="fas fa-folder">'
                            }
                        }
                        //  -----------------------------------------------------------------------------------------
                        function ocultardisplay(){
                            var displayaulas = document.getElementById('aulas').style.display = 'none';
                            var displaydetalhes = document.getElementById('detalhes').style.display = 'none';
                        }
                        
            </script>
    
    
    
    <div class="container">

        <div class="curso-box" id="box">
                <br><br>
               <i class="fas fa-spinner fa-spin fa-3x" id="icon-load"></i>
                <br><br>
                <h4>Informática</h4>
                <div class="dropdown-divider"></div>
                <h5>Professor: Jorge Luiz | Turma: S14</h5>
                <div class="dropdown-divider"></div>
                

                <!-- BOTÕES DE CONTROLE -->
                <div class="btn-group">
                    <!-- CRIANDO UM BOTÃO MELHOR -->
                    <button type="button" onclick="MudarEstado('detalhes')" class="btn btn-light" id="folder">Detalhes <i class="fas fa-folder"></i></button>
                    <!-- aqui a gente coloca dentro da função a palavra 'detalhes' pois ela que será substituta da palavra 'variavel' dentro da função -->
                    <button type="button" onclick="MudarEstadoAula('aulas')" class="btn btn-light" id="folderAula">Aulas <i class="fas fa-folder"></i></button>           
                    
                </div>
                
                 <br>

                <div id="detalhes"> 
                    <ul>
                        <li>Início:</li>
                        <li>Fim:</li>
                        <li>Qtde Aulas:</li>
                        <li>Data da Prova:</li>
                        <li>Materiais:</li>
                    </ul>
                    <button class="btn btn-outline-light">Acessar Curso</button>
                </div>

        <!-- DIVISÓRIA  &#9660  -->
        <br>
        <!-- DIVISÓRIA -->                    

        <div id="aulas" >
                <table class="table table-hover table-dark table-md table-responsive{-sm|-md|-lg|-xl}">
                            <thead>
                                <!-- cabeçalho da tabela -->
                                <tr>
                                    <th scope="col">N° Aula</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Arquivos</th>
                                    <th scope="col">Visualizar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- corpo da tabela -->
                                <tr>
                                    <td>1</td>
                                    <td>Como alterar páginas no word</td>
                                    <td>...Download...</td>
                                    <td>Play</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Como tirar print</td>
                                    <td>...Download...</td>
                                    <td>Play</td>
                                </tr>
                            </tbody>
                </table>
        </div>
        </div>
    </div>    
</body>
</html>