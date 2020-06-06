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


// OBSERVAÇÃO tem que ter o evento 'onload' dentro da tag body para que a função seja carregada ao iniciar a página