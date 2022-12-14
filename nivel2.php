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
    menu("nivel3.php");
    ?>
    <div id="juego">
        <div id="container">
            <p id="numeroNivel">NIVEL 2</p>
            <style> 
                <?php
                     require "phpRedundancia/styleBordes.php";
                ?>
  
            </style>
            <table>
                <tr>
                    <td class="bordeI bordeA"> <input min=1 max=9 class="lugares" type="number" name="" id="" readonly> </td>
                    <td class="bordeA"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA bordeD"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA bordeI"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA bordeD"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                </tr>


                <tr>
                    <td class="bordeI bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id="" readonly> </td>
                    <td class="bordeAb bordeD"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeI bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeD bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                </tr>



                <tr>
                    <td class="bordeI bordeA"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA bordeD"> <input min=1 max=9 class="lugares" type="number" name="" id="" readonly> </td>
                    <td class="bordeA bordeI"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA bordeD"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                </tr>


                <tr>
                    <td class="bordeI bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeD bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeI bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id="" readonly> </td>
                    <td class="bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeAb bordeD"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                </tr>


                <tr>
                    <td class="bordeI bordeA"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA bordeD"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA bordeI"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeA"> <input min=1 max=9 class="lugares" type="number" name="" id="" readonly> </td>
                    <td class="bordeD bordeA"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                </tr>


                <tr>
                    <td class="bordeI bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeAb bordeD"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeAb bordeI"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id=""> </td>
                    <td class="bordeD bordeAb"> <input min=1 max=9 class="lugares" type="number" name="" id="" readonly> </td>
                </tr>

            </table>
        </div>

        <?php
        require "phpRedundancia/estrellas.php";
        estrellas("nivel3.php");
        ?>
    </div>
    <?php
    require "phpRedundancia/repeatPhp.php";
    enviar("js/nivel2.js");
    ?>
    <div>
        <img src="https://cdn.dribbble.com/users/153781/screenshots/2517980/media/fc5e1adc1920fe9d3fe5e2cefe2160e6.gif" alt="publicidad">
    </div>
    <!-- <script src="js/nivel2.js" type="module" ></script> -->
</body>

</html>