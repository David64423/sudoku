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
        menu("niveles.php");
   ?>
<div id="juego">
<div id="container" >
<p id="numeroNivel">NIVEL 3</p>
<style> 
  <?php
        require "phpRedundancia/styleBordes.php";
  ?>
  
</style>
    <table>
        <tr>
                <td class="bordeI bordeA"> <input  max=9 min=1 class="lugares" type="number" name="" id="" readonly> </td>
                <td class="bordeA"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeD bordeA"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeA bordeI"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeA"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeA bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeI bordeA"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>
                <td class="bordeA"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeA bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>

        </tr>


        <tr>
                <td class="bordeI"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>
                <td> <input  max=9 min=1 class="lugares" type="number" name="" id="" readonly> </td>
                <td class="bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeI"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeI"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>

        </tr>

        <tr>
                <td class="bordeAb bordeI"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id="" readonly> </td>
                <td class="bordeI bordeAb"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb bordeI"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>
                <td class="bordeAb"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>

        </tr>

        <tr>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeA bordeI"> <input max=9 min=1 class="lugares" type="number" name="" id="" readonly> </td>
                <td class="bordeA"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeA bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>

        </tr>


        <tr>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeI"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id="" readonly> </td>
                <td class="bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>

        </tr>

        <tr>
                <td> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeI bordeAb"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id="" readonly> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>

        </tr>


        <tr>
                <td class="bordeI bordeA"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>
                <td class="bordeA"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeD bordeA"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeI bordeA"> <input max=9 min=1 class="lugares" type="number" name="" id="" readonly></td>
                <td class="bordeA"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeA bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>

        </tr>


        <tr>
                <td class="bordeI"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeD"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeI"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>
                <td> <input  max=9 min=1 class="lugares" type="number" name="" id="" readonly> </td>
                <td class="bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>

        </tr>

        <tr>
                <td class="bordeAb bordeI"> <input max=9 min=1 class="lugares" type="number" name="" id=""></td>
                <td class="bordeAb"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb bordeD"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb"> <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb bordeI"> <input  max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb">  <input max=9 min=1 class="lugares" type="number" name="" id=""> </td>
                <td class="bordeAb bordeD"> <input  max=9 min=1 class="lugares" type="number" name="" id="" readonly> </td>

        </tr>

    </table>

</div>
<?php
require "phpRedundancia/estrellas.php";
estrellas("niveles.php");
?>
</div>

    <?php
        require "phpRedundancia/repeatPhp.php";
        enviar("js/nivel3.js");
    ?>
<div id=gifcoca>
    <img src="https://38.media.tumblr.com/349056a60ddceaaefe6e13fb9586c54c/tumblr_nlsbnriImw1uo0zoxo1_1280.gif" alt="publicidad">
</div>
    
</body>
</html>