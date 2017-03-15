<link rel="stylesheet" href="css/FullImg.css">
<?php
$NumImagen=$_GET['ImagenF'];

include("phpConect/conexion.php");

$query = "SELECT * FROM tablaimagen";
$resultado = $conexion->query($query);
while ($contar = $resultado->fetch_assoc()) {

    if ($NumImagen == $contar['Id']) {
      ?>
      <div class="Fullimage">
        <div class="planeSquareArea">
          <div class="titleFull">
            <h3><?php echo $contar['Nombre']; ?></h3>
            <a href="index.php">X</a>
          </div>

          <div class="imageFull">
              <img src="data:image/jpg;base64,<?php echo base64_encode($contar['Imagen'])?>" alt="imagen" class="imagen">
          </div>
          <div class="commentFull"><p><?php echo $contar['Comentario']; ?></p></div>
        </div>
      </div>
      <?php
    }

}
 ?>
