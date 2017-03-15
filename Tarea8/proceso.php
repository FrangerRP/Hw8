<?php
 session_start();

 $user=$_POST['userName'];
 $password=$_POST['password'];

 include("phpConect/conexion.php");

 $proceso = $conexion->query("SELECT * FROM User WHERE User='$user' AND Pass='$password'");
  if ($resultado = mysqli_fetch_array($proceso)) {
    $_SESSION['u_usuario'] = $user;
    header("Location: admin/adminPag.php");
  }else {
    header("Location: index.php");
  }
?>
