<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Galery</title>
    <link rel="stylesheet" href="css/desing.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

    <div class="iniSecPop">
        <?php
          include("iniciarSeccion.php");
         ?>
    </div>

    <div class="contenedor">


      <header>
        <div class="logo">
          Galeria de Imagenes
        </div>
        <div class="Enlace">
          <button onclick="OpenPop();">Modo Ediccion</button>
        </div>
      </header>

      <section>
        <div class="AreaGalery">
          <?php
            include("phpConect/conexionPag.php");
           ?>
        </div>


        <div class="AreaPagina">

          <?php
           for($i=1; $i<=$total_paginas; $i++){
             // echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  &nbsp";
          ?>

           <div class="PaginacionNum">
             <a href="?pagina=<?php echo $i ?>"><?php echo $i; ?></a>
           </div>

         <?php
            }
          ?>

        </div>

      </section>

      <footer>
        Franger Ramirez copyright 2017
      </footer>
      <!-- Script para el pop -->
      <script src="js/jquery.min.js"></script>
      <script>
  			function OpenPop(){
  				$(".iniSecPop").slideDown("slow");
          $(".iniSecPop").css({'display':'flex'});
  			}
  			function ClosePop(){
  				$(".iniSecPop").slideUp("fast");
          $(".iniSecPop").css({'display':'none'});
  			}
        // ClosePop();
  		</script>     

    </div>
  </body>
</html>
