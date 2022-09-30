let lugares = document.getElementsByClassName("lugares");
let prueba = document.getElementById("prueba");
let valoresCorrectos = "352523423451521135";
let solucion = document.getElementById("solucion");
valoresCorrectos = valoresCorrectos.split("");
let i=0;


function verificar(lugares, valoresCorrectos){
    let contadorMal=0;
    let contador=0;
    i=0;
    while(i<lugares.length){
        if(valoresCorrectos[i] != lugares[i].value){
            contadorMal=1;
    
        }
        else{
            contador++;
        }
    i++;
}

if(contador==lugares.length){
    document.getElementById("prueba").innerText="Ganaste";
}
}

solucion.addEventListener('click', ()=>{verificar(lugares, valoresCorrectos)});
