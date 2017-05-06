<?php include 'conexion/conexion.php';?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Consultas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<header id="header">
			<h1><a href="menu.php">SuperMercado "San Pancho".</a></h1>
			<nav id="nav">
				<ul>
					<li class="special">
						<a href="#menu" class="menuToggle"><span>Menu</span></a>
						<div id="menu">
							<ul>
								<li><a href="menu.php">Menu</a></li>
								<li><a href="altas.php">Registrar</a></li>
								<li><a href="bajas.php">Eliminar</a></li>
								<li><a href="consultas.php">Consultar</a></li>
								<li><a href="modificar.php">Modificar</a></li>
								<li><a href="#">Salir</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</header>

				<!-- Main -->
					<article id="main">

						<section class="wrapper style5">
							<div class="inner">
								<center><h4>Productos Disponibles</h4><center>

									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>SKU</th>
													<th>Nombre</th>
													<th>Descripcion</th>
												</tr>
											</thead>
											<tbody>
												<?php while($user = mysqli_fetch_array($datos)){ ?>
													<tr>
														<td><?php echo $user['sku']; ?></td>
														<td><?php echo $user['nombre_producto']; ?></td>
														<td><?php echo $user['descripcion']; ?></td>
													</tr>
												<?php } ?>

												<?php while($user2 = mysqli_fetch_array($datos2)){ ?>
													<tr>
														<td><?php echo $user2['id_producto']; ?></td>
														<td><?php echo $user2['nombre_producto']; ?></td>
														<td><?php echo $user2['descripcion_producto']; ?></td>
													</tr>
												<?php } ?>

											</tbody>
										</table>
									</div>
								</section>
								</div>
						</section>
					</article>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>
