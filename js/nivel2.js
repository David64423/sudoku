import {verificar} from './sudoku.js';
import {main} from './sudoku.js';
import {funcionEstrellas} from './sudoku.js';
import {rellenarDiagonal} from './sudoku.js';
import {showSolution} from './sudoku.js';

let showSolutions = document.getElementById("showSolutions");

let lugares = document.getElementsByClassName("lugares");

let lugaresRellenar = [0,7,14,21,28,35];

let camino=Math.floor(Math.random()*3);

if(camino==0){
    let solucion="531264246153163542452316314625265431";
    showSolutions.addEventListener('click',()=>{showSolution(lugares,solucion)})
    main(solucion);
    rellenarDiagonal(lugares,[5,4,3,3,2,1],lugaresRellenar);

}

else if(camino==1){
    showSolutions.addEventListener('click',()=>{showSolution(lugares,solucion)})
    let solucion="142563536241315624624315463152251436";
    main(solucion);
    rellenarDiagonal(lugares,[1,3,5,3,5,6],lugaresRellenar);

}

else{
    showSolutions.addEventListener('click',()=>{showSolution(lugares,solucion)})
    let solucion="456231312645164352523164235416641523";
    main(solucion);
    rellenarDiagonal(lugares,[4,1,4,1,1,3],lugaresRellenar);
}

let a=[0,1,2,3];
a.length;


funcionEstrellas();
