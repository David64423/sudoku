import {verificar} from './sudoku.js';
import {main} from './sudoku.js';
import {funcionEstrellas} from './sudoku.js';
import {rellenarDiagonal} from './sudoku.js';

let lugares = document.getElementsByClassName("lugares");

let lugaresRellenar = [0,10,20,30,40,50,60,70,80];

let camino=Math.floor(Math.random()*3);

if(camino==0){

    main("123469758846571293957283641312758469468392175579146832234615987681937524795824316");
    rellenarDiagonal(lugares,[1,4,7,7,9,6,9,2,6],lugaresRellenar);


}
else if(camino==1){
    main("196523874745198263283467951821375649564819732937246518658934127419752386372681495");
    rellenarDiagonal(lugares,[1,4,3,3,1,6,1,8,5],lugaresRellenar);

}

else{
    main("876493125359182467142567389497625813523814976618739254781946532935278641264351798");
    rellenarDiagonal(lugares,[8,5,2,6,1,9,5,4,8],lugaresRellenar);
}
let a=[0,1,2,3];
a.length;


funcionEstrellas();


