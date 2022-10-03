<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    require "phpRedundancia/niveles.php";
    ?>

</head>
<body>
    <div id="menu">
            <div class="elementoMenu" >
                <a class="home" href=""><img id="home" title="Inicio"  src="img/home.png" alt=""></a>
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
            <a href="" class="nextLevel" title="Siguiente Nivel"> <img id="nextLevel" src="img/siguienteNivel.png" alt=""></a>

            </div>
        
    </div>

    <p id="numeroNivel">NIVEL 1</p>
    
    <table style="margin-top:10vh; margin-left:1vw;">
        <tr>
            <td> <input  class="lugares"  min=1 max=9 type="number" name="" id=""> </td>
            <td class="nF"> 1 </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td class="nF"> 4 </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
        </tr>


        <tr>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td class="nF"> 1 </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
        </tr>


        <tr>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
        </tr>

        <tr>
            <td class="nF"> 4 </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td class="nF"> 3 </td>
        </tr>

        <tr>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td class="nF"> 4 </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
            <td class="nF"> 2 </td>
            <td> <input class="lugares" min=1 max=9 type="number" name="" id=""> </td>
        </tr>

    
    </table>

    <?php
        require "phpRedundancia/repeatPhp.php";
        enviar("js/nivel1.js");
    ?>


</body>
</html>