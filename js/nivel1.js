import {verificar} from './sudoku.js';
import {main} from './sudoku.js';
import {funcionEstrellas} from './sudoku.js';
import {rellenarDiagonal} from './sudoku.js';

let lugares = document.getElementsByClassName("lugares");

let lugaresRellenar = [0,6,12,18,24];

let camino=Math.floor(Math.random()*3);

if(camino==0){

    main("3425115423531424231521534");
    rellenarDiagonal(lugares,[3,5,1,1,4],lugaresRellenar);


}
else if(camino==1){
    main("4215325314314251453253241");
    rellenarDiagonal(lugares,[4,5,4,3,1],lugaresRellenar);

}

else{
    main("1352435241524132413541352");
    rellenarDiagonal(lugares,[1,5,4,3,2],lugaresRellenar);
}
let a=[0,1,2,3];
a.length;








funcionEstrellas();





