<title>Sudoku</title>

<style>
<?php
    require "phpRedundancia/variables.php";
?>


table,td{
    border:1px solid black;
    width:50vw;
    height:10vh;
}

body{
    background-color: var(--c5);

}

.nF{
    border:1px solid black;
    text-align:center;
    color:blue;
    background-color:var(--c2);
}

.home{
    width:40%;
    height:60%;
    align-self:center;
}
#home{
    height:100%;
    width:100%;
}

#home:hover{
    height:110%;
    width:110%;
}


#menu{
    width:99.6%;
    height: 15vh;
    border: var(--bf);
    margin:1px;
    background-color: blueviolet;
    /*
    background-color: var(--c5); */
    display:flex;
    flex-direction: row;
    justify-content: space-between;
}

input{
    width: 100%;
    height:100%;
    padding-left:45%;
    background-color: var(--c1);
}

#numeroNivel{
    font-family: impact;
    font-size:3vw;
    color: black;
}

.elementoMenu{
    width:15vw;
    height:100%;
    border: var(--bp);
    display:flex;
    justify-content:center;
    align-items:center;
}

a{
    text-decoration:none;
    color: black;
    font-size:2.2vw;
    font-family:impact;
}

a:hover{
    color:red;
    font-size:2.5vw;
}

.nextLevel{
    width:40%;
    height:60%;
    align-self:center;
}

#nextLevel{
    height:100%;
    width:100%;
}

#nextLevel:hover{
    height:110%;
    width:110%;
}


#container{
    border: var(--bp);
    width:60%;
    background-color:var(--c3);
}

#containerDerecha{
    border: var(--bp);
    width:39.6%;
    height:70vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items: space-between;
    
}

#juego{
    display:flex;
    flex-direction: row;
    flex-wrap:wrap;
}

.estrella{
    padding-top:6px;
    width:6vw;
    height:7vh;
    background-color:var(--c1);
    cursor:pointer;
}

#sistemaDeEstrellas{
    display:flex;

}

#ganaste{
    border:var(--bp);
    height:100%;
    width:100%;
    background-color: var(--c4);
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items: space-between;
}

.contenidoGanaste{
display:none;
}

</style>