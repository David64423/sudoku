import {verificar} from './sudoku.js';
import {main} from './sudoku.js';
import {funcionEstrellas} from './sudoku.js';
import {rellenarDiagonal} from './sudoku.js';
import {showSolution} from './sudoku.js';

let lugares = document.getElementsByClassName("lugares");

let lugaresRellenar = [0,6,12,18,24];

let showSolutions = document.getElementById("showSolutions");

let camino=Math.floor(Math.random()*3);

if(camino==0){
    
    let solucion="3425115423531424231521534";
    showSolutions.addEventListener('click',()=>{showSolution(lugares,solucion)})
    main(solucion);
    rellenarDiagonal(lugares,[3,5,1,1,4],lugaresRellenar);


}
else if(camino==1){
    showSolutions.addEventListener('click',()=>{showSolution(lugares,solucion)})
    let solucion="4215325314314251453253241";
    main(solucion);
    rellenarDiagonal(lugares,[4,5,4,3,1],lugaresRellenar);

}

else{
    showSolutions.addEventListener('click',()=>{showSolution(lugares,solucion)})
    let solucion="1352435241524132413541352";
    main(solucion);
    rellenarDiagonal(lugares,[1,5,4,3,2],lugaresRellenar);
}




let a=[0,1,2];
console.log(a.length);


funcionEstrellas();





