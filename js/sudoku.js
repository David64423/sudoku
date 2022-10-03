export function verificar(lugares, valoresCorrectos,ganaste){
    let contador=0;
    let i=0;
    while(i<lugares.length){
        if(valoresCorrectos[i] != lugares[i].value){
    
        }
        else{
            contador++;
        }
    i++;
}

if(contador==lugares.length){
    ganaste.innerText="Ganaste";
}
}

export function main(valores){
    let lugares = document.getElementsByClassName("lugares");
    let ganaste = document.getElementById("ganaste");
    let valoresCorrectos = valores;
    let solucion = document.getElementById("solucion");
    valoresCorrectos = valoresCorrectos.split("");
    
    solucion.addEventListener('click', ()=>{verificar(lugares, valoresCorrectos,ganaste)});
    }







export function funcionEstrellas(){

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



}; 

