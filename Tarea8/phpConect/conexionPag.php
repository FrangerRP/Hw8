<?php
  try {
    $base=new PDO("mysql:host=localhost; dbname=practicas", "root", "aAuQBYLQ");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    $registPag=20;

      if (isset($_GET["pagina"])) {

        if ($_GET["pagina"]==1) {
          header("Location:index.php");
        }else {
          $pagina=$_GET["pagina"];
        }

      }else {
        $pagina=1;// Ya no tengo que estudiar
      }
    $desdePag=($pagina-1)*$registPag;

    $sql_total="SELECT Imagen FROM tablaimagen";

    $resultado=$base->prepare($sql_total);

    $resultado->execute(array());
    $num_filas=$resultado->rowCount();

    $total_paginas=ceil($num_filas/$registPag);
    // echo "Numero de registro: " . $num_filas . "<br>";
    // echo "Mostramos: " .$registPag . " registros por filas<br>";
    // echo "Mostrando la pagina: " . $pagina . " de " . $total_paginas . "<br>";


    $resultado->closeCursor();

    $sql_limite="SELECT * FROM tablaimagen LIMIT $desdePag, $registPag";
    $resultado=$base->prepare($sql_limite);
    $resultado->execute(array());

    while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
  ?>

  <a href="ImagenFull.php?ImagenF=<?php echo $registro['Id'] ?>">
    <div class="image">
      <img src="data:image/jpg;base64,<?php echo base64_encode($registro["Imagen"])?>" alt="imagen">
    </div>
  </a>

  <?php
    }

  } catch (Exception $e) {
      echo "Linea Error: " . $e->getLine();
  }

  // ---------------------PAGINACION
  ?>
