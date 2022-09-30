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

