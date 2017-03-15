<?php
  include("conexion.php");

  $id = $_REQUEST['id'];
  $query ="DELETE FROM tablaimagen WHERE Id ='$id'";
  $resultado = $conexion->query($query);

  if ($resultado) {
      header("Location: mostrar.php");
  }else {
    echo "No se Elimino";
  }
?>
