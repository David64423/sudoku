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
   <?php
        require "phpRedundancia/menu.php";
        menu("nivel2.php");
   ?>

<div id="juego" >
    <div id="container" >

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

    </div>

<?php
require "phpRedundancia/estrellas.php";
estrellas("nivel2.php");
?>
</div>

    <?php
        require "phpRedundancia/repeatPhp.php";
        enviar("js/nivel1.js");
    ?>


</body>
</html>