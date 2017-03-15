<?php

session_start();

if (isset($_SESSION['u_usuario'])) {
  include("conexion.php");
  $nombre = $_POST['nombre'];
  $imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
  $comentario =$_POST['comentario'];

  $query ="INSERT INTO tablaimagen(Nombre,Imagen,Comentario) VALUES('$nombre','$imagen','$comentario')";
  $resultado = $conexion->query($query);

  if ($resultado) {
    header("Location: mostrar.php");
  }else {
    echo "No se inserto";
  }
}else {
  header("Location:../index.php");
}


 ?>
