<?php
function menu($direccion){ ?>

<div id="menu">
            <div class="elementoMenu" >
                <a class="home" href="inicio.php"><img id="home" title="Inicio"  src="img/logo3.png" alt=""></a>
            </div>

            <div class="elementoMenu">
                <a href="niveles.php"> <p title="Select Level" >ELEGIR NIVEL</p> </a>
            </div>

        <!--
            <div class="elementoMenu">
                <a href=""> <p>Acerca de nosotros</p> </a>
            </div>
        -->    
            <div class="elementoMenu">
            <a href="<?php echo $direccion ?>" class="nextLevel" title="Siguiente Nivel"> <img id="nextLevel" src="img/siguienteNivel.png" alt=""></a>

            </div>
        
    </div>

    <?php } ?>