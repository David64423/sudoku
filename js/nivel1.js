import {verificar} from './sudoku.js';
import {main} from './sudoku.js';
import {funcionEstrellas} from './sudoku.js';



main("352523423451521135");

/*
function funcionEstrellas(){

    let isPainted= false;

let estrellas = [document.getElementById("estrella1"),document.getElementById("estrella2"),document.getElementById("estrella3"),document.getElementById("estrella4"),document.getElementById("estrella5")]
estrellas[0].addEventListener('mouseover',()=>{colorearEstrellas(0); });
estrellas[1].addEventListener('mouseover',()=>{colorearEstrellas(1);});
estrellas[2].addEventListener('mouseover',()=>{colorearEstrellas(2); });
estrellas[3].addEventListener('mouseover',()=>{colorearEstrellas(3); });
estrellas[4].addEventListener('mouseover',()=>{colorearEstrellas(4); });

function colorearEstrellas(numero){
let i=0;

if(isPainted==false){

while (i<numero+1){
    estrellas[i].src="img/estrellaFondo.png";
    i++;
}
}
}



estrellas[0].addEventListener('mouseout',()=>{descolorearEstrellas(0); });
estrellas[1].addEventListener('mouseout',()=>{descolorearEstrellas(1);});
estrellas[2].addEventListener('mouseout',()=>{descolorearEstrellas(2); });
estrellas[3].addEventListener('mouseout',()=>{descolorearEstrellas(3); });
estrellas[4].addEventListener('mouseout',()=>{descolorearEstrellas(4); });

function descolorearEstrellas(){
    let i=0;
    if(isPainted == false){
    while (i<5){
        estrellas[i].src="img/estrella.png";
        i++;
    }}
    }

function seleccionarEstrella(numero){
    if(isPainted==false){
    isPainted=true;
}
    else{
        isPainted=false;
        descolorearEstrellas();
        colorearEstrellas(numero);
        setTimeout(()=>{isPainted=true;},100);
    }
}

estrellas[0].addEventListener('click',()=>{seleccionarEstrella(0); });
estrellas[1].addEventListener('click',()=>{seleccionarEstrella(1);});
estrellas[2].addEventListener('click',()=>{seleccionarEstrella(2); });
estrellas[3].addEventListener('click',()=>{seleccionarEstrella(3); });
estrellas[4].addEventListener('click',()=>{seleccionarEstrella(4); });



}; */

funcionEstrellas();





