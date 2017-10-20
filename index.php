<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta name="author" content="Sylvain MILLET" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" CONTENT="Site de location du studio locastudio Paris Montmartre" />
		<meta name="keywords" CONTENT="location, location saisonnière, studio, studette, paris, montmartre, 18ème, appartement, louer, locastudioparis" />
		<title>Studio Montmartre Paris</title>

		<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
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
		</script>
	</head>

	<body>
		<div class="main">
			<header>
				<div>
					<?php
					include "fancybox.php";
					include "slide_index.php";
					?>
					<nav>
						<ul class="menu">
							<li class="current">
								<a href="index.php">Accueil</a>
							</li>
							<li>
								<a href="studio.php">Studio</a>
							</li>
							<li>
								<a href="location.php">Situation & Accès</a>
							</li>
							<li>
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
						<h2 class="top-1 p3">Location saisonnière à Paris Montmartre</h2>

						<p class="p2">
							Nous sommes des particuliers et nous louons un charmant petit studio confortablement meublé et équipé,
							dans une belle résidence de standing gardée et sécurisée, très calme et bien située dans le 18ème arrondissement de Paris,
							proche de Montmartre, avec un balcon offrant une belle vue dégagée sur les toits de Paris et la butte Montmartre.
						</p>

						<p class="line-1">
							La location est possible à la journée, à la semaine ou au mois, pour vos séjours professionnels ou touristiques,
							pour vos stages ou formations, pour les salons et expos, pour vos week-ends ou des vacances à Paris...
							Pourquoi choisir une chambre d'hôtel impersonnelle et chère quand vous pouvez profiter de l'hospitalité d'un appartement
							parisien ?
							<br />
							<br />
							<a href="booking.php" class="button">Réserver</a>
						</p>

						<h2 class="p4">Paris Montmartre</h2>

						<div class="wrap block-1">
							<div>
								<a class="elastic img-border img-indent" href="images/quartier/montmartre1.JPG" data-fancybox-group="gallery"> <img src="images/quartier/montmartre1_mini.JPG" alt="sacreCoeur" /> </a>
								<h3>Basilique du Sacré-Cœur</h3>
								<p>
									La basilique du Sacré-Coeur est un édifice religieux majeur de Paris, situé au sommet de la butte Montmartre.
								</p>
							</div>
							<div>
								<a class="elastic img-border img-indent" href="images/quartier/pigalle.JPG" data-fancybox-group="gallery"> <img src="images/quartier/pigalle_mini.JPG" alt="placePigalle" /> </a>
								<h3>Place Pigalle</h3>
								<p>
									La place Pigalle est située dans le 9ème arrondissement, au pied de la butte Montmartre. Jean-Baptiste Pigalle était un sculpteur.
								</p>
							</div>
							<div class="last">
								<a class="elastic img-border img-indent" href="images/quartier/moulinrouge.JPG" data-fancybox-group="gallery"> <img src="images/quartier/moulinrouge_mini.JPG" alt="moulinRouge" /> </a>

								<h3>Le Moulin Rouge</h3>
								<p>
									Le Moulin Rouge est un cabaret parisien du 18ème arrondissement. Son style et son nom ont été utilisés pour de multiples cabarets à travers le monde.
								</p>
							</div>
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
