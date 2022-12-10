<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Matemáticas Grado 5°</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	<link rel="shortcut icon" href="images/loge.jpeg">
</head>
<body>	
<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">
					<img src="images/logopequeño.jpg" alt="Logo Image"> 
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
							<?php if (isset($_SESSION['usua']));?> 
								<li><a href="index.php">Inicio</a></li>
								<li><a href="../tutorial.php">Tutorial</a></li>
								<li><a href="../informacion.php">Información</a></li>
								<li><a href="../manual.php">Manual</a></li>
								<li><a href="evaluacion.php">Evaluaciones</a></li>
								<li><a href="#">Hola,<?=$_SESSION['usua']['nombre'];?></a></li>
								<li><a href="logout.php">Salir</a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>	
		<!-- Scroll Inicio -->
		<div class="banner">
			<div class="owl-four owl-carousel" itemprop="image">
			<img src="images/loge.jpeg" alt="Image of Bannner">
				<center>
					<iframe width="860" height="515" src="https://www.youtube.com/embed/3qSpKHHKJU8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</center>	
			</div>
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>
		
		<!-- Titulo Inicio  -->
		<div class="page-heading">
			<div class="container">
				<h2>Evaluaciones Diagnosticas</h2>
			</div>
		</div>
		<!-- Inicio Principal -->
		<div class="learn-courses">
			<div class="container">
				<div class="courses">
					<div class="owl-one owl-carousel">
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
						<div class="img-wrap" itemprop="image"><img src="images/sum.png" alt="courses picture"></div>
								<a href="suma.php" class="learn-desining-banner" itemprop="name">Suma</a>
							<div class="box-body" itemprop="description">
								<p>La suma o adición es una de las cuatro operaciones básicas de la aritmética que consiste en la adición de dos o más elementos para llegar a un resultado final donde todo se incluye. El símbolo de la suma es el símbolo más (+) y se intercala entre los elementos que se quiere sumar como, por ejemplo: 2+3=5</p>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/rest.png" alt="courses picture"></div>
								<a href="resta.php" class="learn-desining-banner" itemprop="name">Resta</a>
							<div class="box-body" itemprop="description">
								<p>Las divisiones son, junto a las sumas, restas y multiplicaciones, operaciones matemáticas que realizamos frecuentemente en nuestra vida cotidiana. Veremos en este artículo cómo se hacen las divisiones, su significado. También estudiaremos los criterios de divisibilidad y conoceremos cómo hacer la prueba de la división para saber si la hemos resuelto bien.</p>
							</div>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/multi.png" alt="courses picture"></div>
								<a href="multiplicacion.php" class="learn-desining-banner" itemprop="name">Multiplicación</a>
							<div class="box-body" itemprop="description">
								<p>La multiplicación es una operación binaria y derivada de la suma que se establece en un conjunto numérico.2​ En aritmética, es una de las cuatro operaciones elementales, junto con la suma, la resta y la división, y es la operación inversa de esta última. Esto significa que para toda multiplicación hay una división, por ejemplo para «5 por 2 igual a 10» la división equivalente es «10 dividido entre 2 igual a 5», o «10 dividido entre 5 igual a 2».</p>
							</div>
						</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/divi.png" alt="courses picture"></div>
								<a href="division.php" class="learn-desining-banner" itemprop="name">Divisón</a>
							<div class="box-body" itemprop="description">
								<p>Las divisiones son, junto a las sumas, restas y multiplicaciones, operaciones matemáticas que realizamos frecuentemente en nuestra vida cotidiana. Veremos en este artículo cómo se hacen las divisiones, su significado. También estudiaremos los criterios de divisibilidad y conoceremos cómo hacer la prueba de la división para saber si la hemos resuelto bien. </p>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap" itemprop="about">
						<header>
							<h1>Información</h1>
						</header>
						<p></p>

						<h4><a href="tel:+9779813639131"><i class="fas fa-phone"></i>3182105866</a></h4>
						<h4><a href="mailto:info@educationpro.com"><i class="fas fa-envelope"></i> Rectoria_Sanjosedeturuma@gmail.com</a></h4>
						<h4><a href=""><i class="fas fa-map-marker-alt"></i>Pailitas, Cesar</a></h4>
					</div>

					<div class="box-wrap">
						<header>
							<h1>Contacto rápido</h1>
						</header>
						<section class="quick-contact">
							<form action="https://formsubmit.co/vasquezacampo@gmail.com" method="POST" target="_blank">
							<input type="email" name="email" placeholder="Tu correo">
							<textarea placeholder="Tu mensaje"></textarea>
							<button>Enviar</button>
							</form>
						</section>
					</div>

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
					</ul>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>Copyright 2022 &copy;  <span> | </span> Todos los derechos reservados.</p>
				</div>
			</div>
		</footer>
	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js " integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0 " crossorigin="anonymous "></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js " integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=" anonymous "></script>
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js "></script>
	<script src="js/jquery.magnific-popup.min.js "></script>
	<script src="js/script.js"></script>
</body>
</html>