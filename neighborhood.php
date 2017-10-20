<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>ParisLocStudio | Neighborhood</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/slider-2.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
		<script src="js/jquery-1.7.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/cufon-yui.js"></script>
		<script src="js/vegur_400.font.js"></script>
		<script src="js/Vegur_bold_700.font.js"></script>
		<script src="js/cufon-replace.js"></script>
		<script src="js/tms-0.4.x.js"></script>
		<script src="js/jquery.jqtransform.js"></script>
		<script src="js/FF-cash.js"></script>
		<script>
			$(document).ready(function() {
				$('.form-1').jqTransform();
				$('.slider')._TMS({
					show : 0,
					pauseOnHover : true,
					prevBu : '.prev',
					nextBu : '.next',
					playBu : false,
					duration : 1000,
					preset : 'fade',
					pagination : true,
					pagNums : false,
					slideshow : 7000,
					numStatus : false,
					banners : false,
					waitBannerAnimation : false,
					progressBar : false
				})
			});
			
			$("a.gallery").fancybox({
				'transitionIn'		:'elastic',
				'transitionOut'		:'elastic',
				'speedIn'		:600,
				'speedOut'		:200,
				'padding'	  	: 0
			});
		</script>

	</head>

	<body>
		<div class="main">
			<header>
				<div>
					<?php
					include "fancybox.php";
					include "slide.php";
					?>
					<nav>
						<ul class="menu">
							<li>
								<a href="index.php">Accueil</a>
							</li>
							<li>
								<a href="studio.php">Studio</a>
							</li>
							<li>
								<a href="location.php">Situation & Accès</a>
							</li>
							<li class="current">
								<a href="neighborhood.php">Quartier</a>
							</li>
							<li>
								<a href="contacts.php">Contacts</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>
			<section id="content">
				<div class="container_12">
					<div class="grid_8">
						<h2 class="top-1 p3">Découvrez les lieux proches</h2>
						<p>
							Quartier calme et populaire, trés vivant, de nombreux commerces, un marché couvert ouvert tous les jours bordé d'un rue pietonne avec des terrases de café et restaurants.
							Le quartier Montmartre est riche de merveilles à découvrir. Voici une courte liste des lieux cultes proches sur lequels vous pouvez vous rendre à pied ou en vélo très facilement.
						</p>
						<div class="lists-2">
							<ul class="list-1">
								<li>
									<a href="tourism.php">Moulin rouge</a>
								</li>
								<li>
									<a href="tourism.php">Pigalle</a>
								</li>
								<li>
									<a href="tourism.php">Cimetière</a>
								</li>
								<li>
									<a href="tourism.php">Eglise</a>
								</li>
							</ul>
							<ul class="list-1">
								<li>
									<a href="tourism.php">Musée de Dalida</a>
								</li>
								<li>
									<a href="tourism.php">Marché du XVIIIème</a>
								</li>
								<li>
									<a href="tourism.php">Vignes de Montmartre</a>
								</li>
								<li>
									<a href="tourism.php">Maison de Dalida</a>
								</li>
							</ul>
							<ul class="list-1 last">
								<li>
									<a href="tourism.php">Basilique de Montmartre</a>
								</li>
								<li>
									<a href="tourism.php">Canaux maritimes</a>
								</li>
								<li>
									<a href="tourism.php">Notre-Dame de Paris</a>
								</li>
								<li>
									<a href="tourism.php">Marché de l'olive</a>
								</li>
							</ul>
						</div>
						<a href="booking.php" class="button">Réserver</a>

						<h2 class="top-2 p3">Déplacements faciles</h2>
						<p class="p5">
							Le quartier est directement desservi par les lignes de métro 12 station Marx Dormoy vous menant d'un bout à l'autre de Paris. Arrêtez-vous pour visiter le Marais, Notre Dame, la tour Eiffel ou le Louvre.
						</p>
						
						
						<h2 class="top-3 p3">Galerie du quartier</h2>
						<div class="wrap block-3">
							<a class="gallery elastic img-border img-indent" href="images/quartier/marche1.JPG" data-fancybox-group="gallery">
								<img src="images/quartier/marche1_mini.JPG" alt="" />
							</a>
							<a class="gallery elastic img-border img-indent" href="images/quartier/marche2.JPG" data-fancybox-group="gallery">
								<img src="images/quartier/marche2_mini.JPG" alt="" />
							</a>
							<a class="gallery elastic img-border img-indent" href="images/quartier/marche3.JPG" data-fancybox-group="gallery">
								<img src="images/quartier/marche3_mini.JPG" alt="" />
							</a>
							<a class="gallery elastic img-border img-indent" href="images/quartier/montmartre1.JPG" data-fancybox-group="gallery">
								<img src="images/quartier/montmartre1_mini.JPG" alt="" />
							</a>
							<a class="gallery elastic img-border img-indent" href="images/quartier/montmartre2.JPG" data-fancybox-group="gallery">
								<img src="images/quartier/montmartre2_mini.JPG" alt="" />
							</a>
							<a class="gallery last elastic img-border img-indent" href="images/quartier/moulinrouge.JPG" data-fancybox-group="gallery">
								<img src="images/quartier/moulinrouge_mini.JPG" alt="" />
							</a>
						</div>
					</div>
					
					<?php
					include "informations.php";
					?>
					
				</div>
			</section>
		</div>

		<?php
		include "footer.php";
		?>
		
		<script>
			Cufon.now();
		</script>
	</body>
</html>
