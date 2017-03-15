<?php
  session_start();

  if (isset($_SESSION['u_usuario'])) {
    include("conexion.php");
    $nombre = $_POST['nombre'];    
    $comentario =$_POST['comentario'];
    $id = $_REQUEST['id'];
    $query ="UPDATE tablaimagen SET Nombre='$nombre', Comentario='$comentario' WHERE Id ='$id'";
    $resultado = $conexion->query($query);

    if ($resultado) {
      header("Location: mostrar.php");
    }else {
      echo "No se modifico";
    }
  }else {
    header("Location:../index.php");
  }

?>
