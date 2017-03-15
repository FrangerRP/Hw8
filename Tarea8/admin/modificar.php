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
    <?php
      include("conexion.php");
      $id = $_REQUEST['id'];
      $query = "SELECT * FROM tablaimagen WHERE Id='$id'";
      $resultado = $conexion->query($query);
      $row = $resultado->fetch_assoc();
    ?>

    <div class="Contenedor">
        <div class="cabecera">
          <div class="logo">
              Galery  / Edit
          </div>
          <div class="Close">
            <a href="cerrar_sesion.php">Cerrar sesion</a>
          </div>
        </div>
        <div class="cuerpo">

          <div class="formulario">

            <form action="proceso_modificar.php?id=<?php echo $row['Id'];?>" method="post" enctype="multipart/form-data"><br><br><br>
              <img src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen'])?>" alt="imagen" width="50">
              <input type="text" required name="nombre" placeholder="Nombre..." value="<?php echo $row['Nombre']?>"><br><br>
              <textarea required name="comentario" maxlength="300" value="KloMiPana"><?php echo $row['Comentario']?></textarea>
              <input type="submit" value="Aceptar" class="btn btn-green">
              <a href="mostrar.php" class="btn btn-red">Cancelar</a>
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
