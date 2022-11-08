let elementosCuandoGanas = document.getElementById("contenidoGanaste");
export function verificar(lugares, valoresCorrectos,mostrarElementosCuandoGanas){
    let contador=0;
    let i=0;
    let tiempo=200;
    while(i<lugares.length){
        if(valoresCorrectos[i] != lugares[i].value){
            
            function intervalo(i){
            
            
                setTimeout(()=>{lugares[i].style.backgroundColor="red";},tiempo);

            }
            intervalo(i);
            tiempo=tiempo+200;
            
           // function cambiarColor(){
                 
           // }


            //setTimeout(cambiarColor,10000);

        }
        else{
            contador++;
            lugares[i].style.backgroundColor="white";
        }
    i++;
}
    i=0;
    setTimeout(()=>{while(i<lugares.length){
        lugares[i].style.backgroundColor="white";
        i++;
    }},tiempo+1200);


if(contador==lugares.length){
    mostrarElementosCuandoGanas();
}
}

export function main(valores){
    let lugares = document.getElementsByClassName("lugares");
    let ganaste = document.getElementById("ganaste");
    let valoresCorrectos = valores;
    let solucion = document.getElementById("solucion");
    valoresCorrectos = valoresCorrectos.split("");
    let nivelSuperado = document.getElementById("nivelSuperado");
    let linkNivelSuperado = document.getElementById("linkNivelSuperado");

    function mostrarElementosCuandoGanas(){
       nivelSuperado.style.display="block"; 
       linkNivelSuperado.style.display="block";
    }
    
    
    solucion.addEventListener('click', ()=>{verificar(lugares, valoresCorrectos,mostrarElementosCuandoGanas)});
    }



    export function rellenarDiagonal(lugares,valores,lugaresQueVamosALlenar){
        let i=0;
    
        while(i< valores.length){
            lugares[lugaresQueVamosALlenar[i]].value=valores[i];
            lugares[lugaresQueVamosALlenar[i]].style.color="red";
            lugares[lugaresQueVamosALlenar[i]].style.fontFamily="impact";
            lugares[lugaresQueVamosALlenar[i]].style.fontSize="2vw";
            lugares[lugaresQueVamosALlenar[i]].min=valores[i];
            lugares[lugaresQueVamosALlenar[i]].max=valores[i];
        
            i++;
        }
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



export function showSolution(lugares,solucion){
    let i=0;
    let tiempo=300;
    solucion = solucion.split("");
    while(i< lugares.length){
        function relleno(i){
        setTimeout(()=>{lugares[i].value=solucion[i]},tiempo);
        tiempo=tiempo+20;}
        relleno(i); //Comentar esta linea en caso que no guste
        i++;
    }
}

