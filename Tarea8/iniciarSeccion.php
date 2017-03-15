<?php  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Seccion</title>
  </head>
  <body>
    <div class="FormArea">

      <form action="proceso.php" method="post">
        <input type="text" name="userName" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input type="submit" name="Loguear" value="Ingresar" class="btn btn-green">
        <button onclick="ClosePop();" class="btn btn-red">Cancelar</button> <!-- Tengo que moverlo de aqui sin que pierda sus proporciones -->        
      </form>

    </div>
  </body>
</html>
