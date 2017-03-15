 <?php
   session_start();

   if (isset($_SESSION['u_usuario'])) {
     session_destroy();
     header("Location: ../index.php");
   }else {
     header("Location: ../index.php");
   }

 ?>
