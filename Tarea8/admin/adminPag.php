<?php
  include("verificar.php");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Index de imagen</title>
    <link rel="stylesheet" href="css/standar.css">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>

    <div class="Contenedor">
        <div class="cabecera">
          <div class="logo">
              Galery  / Insert
          </div>
          <div class="Close">
            <a href="cerrar_sesion.php">Cerrar sesion</a>
          </div>
        </div>
        <div class="cuerpo">

          <div class="formulario">

          <form action="proceso_guardar.php" method="post" enctype="multipart/form-data"><br><br><br>
            <input type="text" required name="nombre" placeholder="Nombre..." value=""><br><br>
            <input type="file" required name="Imagen" class="inputfile" id="file"><br><br>
            <textarea required name="comentario" maxlength="300"></textarea>
            <input type="submit" value="Aceptar" class="btn btn-green">
            <a href="mostrar.php"><button type="button" name="Vista" class="btn btn-cian">Mostrar Registro</button></a>
          </form>

        </div>


        </div>
        <div class="piedpag">
            <p id="copy">copyright FrangerRP 2017</p>
            <p id="usuario"><b>Usuario conectado:</b> <?php echo $_SESSION['u_usuario']; ?></p>
        </div>
    </div>

  </body>
</html>
