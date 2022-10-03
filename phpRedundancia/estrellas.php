<?php
function estrellas($direccion){ ?>
    <div id="containerDerecha">
    <div id="sistemaDeEstrellas">

    
        <div class="estrellas">
            <img class="estrella" id="estrella1" src="img/estrella.png" alt="estrellas para calificar:numero 1">
        </div>
        <div class="estrellas">
            <img class="estrella" id="estrella2" src="img/estrella.png" alt="estrellas para calificar:numero 2">
        </div>
        <div class="estrellas">
            <img class="estrella" id="estrella3" src="img/estrella.png" alt="estrellas para calificar:numero 3">
        </div>
        <div class="estrellas">
            <img class="estrella" id="estrella4" src="img/estrella.png" alt="estrellas para calificar:numero 4">
        </div>
        <div class="estrellas">
            <img class="estrella" id="estrella5" src="img/estrella.png" alt="estrellas para calificar:numero 6">
        </div>

    </div>

    <div id="ganaste">

    <p  id="nivelSuperado" class="contenidoGanaste">NIVEL SUPERADO!!!</p>
    <a id="linkNivelSuperado" class="contenidoGanaste" href="<?php echo $direccion  ?>">SIGUIENTE NIVEL</a>
    <img class="contenidoGanaste" src="" alt="">
    
    </div>
    </div>
<?php } ?>