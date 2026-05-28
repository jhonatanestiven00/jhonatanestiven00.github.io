let menuVisible = false;
//Función que oculta o muestra el menu
function mostrarOcultarMenu(){
    if(menuVisible){
        document.getElementById("nav").classList ="";
        menuVisible = false;
    }else{
        document.getElementById("nav").classList ="responsive";
        menuVisible = true;
    }
}

function seleccionar(){
    //oculto el menu una vez que selecciono una opcion
    document.getElementById("nav").classList = "";
    menuVisible = false;
}
//Funcion que aplica las animaciones de las habilidades
function efectoHabilidades(){

    let skills = document.getElementById("skills");
    let distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;

    if(distancia_skills >= 300){

        let habilidades = document.querySelectorAll(".progreso");

        habilidades.forEach(habilidad => {

            let porcentaje = habilidad.dataset.width;

            habilidad.style.width = porcentaje + "%";
        });
    }
}

//detecto el scrolling para aplicar la animacion de la barra de habilidades
window.onscroll = function(){
    efectoHabilidades();
} 
