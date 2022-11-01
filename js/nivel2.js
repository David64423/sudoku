import {verificar} from './sudoku.js';
import {main} from './sudoku.js';
import {funcionEstrellas} from './sudoku.js';

let lugares = document.getElementsByClassName("lugares");

let lugaresRellenar = [0,7,14,21,28,35];

let camino=Math.floor(Math.random()*3);

if(camino==0){

    main("531264246153163542452316314625265431");
    rellenarDiagonal(lugares,[5,4,3,3,2,1],lugaresRellenar);

}

else if(camino==1){
    main("142563536241315624624315463152251436");
    rellenarDiagonal(lugares,[1,3,5,3,5,6],lugaresRellenar);

}

else{
    main("456231312645164352523164235416641523");
    rellenarDiagonal(lugares,[4,1,4,1,1,3],lugaresRellenar);
}

let a=[0,1,2,3];
a.length;


funcionEstrellas();
