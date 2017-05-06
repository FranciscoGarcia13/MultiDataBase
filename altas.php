<!DOCTYPE HTML>

<html>
	<head>
		<title>Alta de productos</title>
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

					<article id="main">

						<section class="wrapper style5">
							<div class="inner">
								<center><h4>Alta de productos</h4><center>

									<form method="post" action="#">

										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="SKU" />
											</div>
										</div>
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Nombre" />
											</div>
										</div>
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Precio" />
											</div>
										</div>
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Descripción" />
											</div>
										</div>
										<div class="row uniform">
										<div class="3u$">
											<ul class="actions">
												<li><input type="submit" value="Registrar" class="special" /></li>
											</ul>
										</div>
									</div>
										</form>
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
