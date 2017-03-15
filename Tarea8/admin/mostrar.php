<?php
  include("verificar.php");
 ?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Mostrar</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="main.css">
	</head>
	<body>

		<div class="newImage">
			<a href="adminPag.php">+</a>
		</div>
    <div class="cabecera">
      <div class="logo">
          Galery / View
      </div>
      <div class="Close">
        <a href="cerrar_sesion.php">Cerrar sesion</a>
      </div>
    </div>
		<div class="container">   <!-- aquib -->


			<?php
				include("conexion.php");

				$query = "SELECT * FROM tablaimagen";
				$resultado = $conexion->query($query);
				while ($row = $resultado->fetch_assoc()) {
			?>

		<div class="ContenedorFoto">
			<div class="AreaImg">
				<img src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen'])?>" alt="imagen" class="imagen">
			</div>
			<div class="AreaInf">
				<div class="dta">
					<div class="MyName"><?php echo $row['Nombre']; ?></div>
					<div class="MyId"><?php echo $row['Id']; ?></div>
				</div>
				<div class="MyText">
					<p><?php echo $row['Comentario'] ?></p>
				</div>
				<div class="Acciones">
					<div class="MyEdit"><a href="modificar.php?id=<?php echo $row['Id']?>"><button class="btn btn-yellow btn-size">Editar</button></a></div>
					<div class="MyDelete"><a href="Eliminar.php?id=<?php echo $row['Id']?>"><button class="btn btn-red btn-size">Eliminar</button></a></div>
				</div>
			</div>
		</div>

		<?php
			}
		?>


		</div> <!-- hasta aqui -->
    <div class="piedpag">
      <p id="copy">copyright FrangerRP 2017</p>
      <p id="usuario"><b>Usuario conectado:</b> <?php echo $_SESSION['u_usuario']; ?></p>
    </div>
	</body>
</html>
