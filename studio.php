<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ParisLocStudio | Studio</title>
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
							<li class="current">
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
						<h2 class="top-1 p3">Le logemement</h2>
						<div class="wrap">
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb08.JPG" data-fancybox-group="gallery"> <img src="images/mrbnb/mrbnb08_mini.JPG" alt="Residence" /> </a>
							<div class="extra-wrap">
								<p class="color-1 p6">
									Le studio fait 17m², il est au 8éme étage de la résidence avec 2 ascenseurs,
									exposé Sud-Est avec une baie vitrée sans vis-à-vis donnant sur un balcon offrant un point de vue sur les toits
									de Paris et la Butte Montmartre.
								</p>
								<p>
									Le studio comporte une entrée avec un placard de rangement, une salle de bain et WC, une pièce principale avec un coin cuisine (voir plan).
								</p>
							</div>
						</div>
						<p class="p5">
							Le studio est entièrement équipé :
							<br />
							- Entrée comprenant un placard avec une penderie.
							<br />
							- Pièce principale meublée, très claire, ave un vrai lit double confortable, draps, couette et housse, oreillers et taies.
							Possibilité d’un couchage d'appoint sans supplément de prix.  Télévision, chaine HiFi, Internet haut débit  Wifi,
							ventilateur, chauffage, table basse, lampe de chevet, Fer à repasser, table à repasser, aspirateur...
							<br />
							- Coin cuisine entièrement équipé comprend un réfrigérateur avec compartiment freezer, un four multifonctions,
							une table de cuisson électrique, une cafetière, une bouilloire, un grille pain et toute la vaisselle pour 3 personnes.
							<br />
							- Salle de bain : cabine douche, lavabo, toilette, serviettes de bain, sèche cheveux.
							<br />
							- Le balcon offrant une belle vue sur Montmartre est équipé d'une table et de chaises pour les petits-déjeuners ou
							les repas sur les toits de Paris, face au Sacré-Cœur.
							<br />
							Le linge de maison est fourni pour toute la durée de votre séjour (couette, draps, serviettes, torchons…).
						</p>
						
						<div class="extra-wrap">
							<h2><?php echo $donnees["picture_description"];?></h2>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb01.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb01_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb02.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb02_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb03.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb03_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb04.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb04_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb05.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb05_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb06.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb06_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb07.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb07_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb08.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb08_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb09.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb09_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb10.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb10_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb11.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb11_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb12.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb12_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb13.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb13_mini.JPG" alt="studio" />
							</a>
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb14.JPG" data-fancybox-group="studio">
								<img src="images/mrbnb/mrbnb14_mini.JPG" alt="studio" />
							</a>
						</div>
						
						<a href="booking.php" class="button">Réserver</a>

						<h2 class="top-1 p3">La résidence</h2>
						<div class="wrap">
							<a class="elastic img-border img-indent" href="images/residence/residence2.JPG" data-fancybox-group="gallery"> <img src="images/residence/residence2_mini.JPG" alt="Residence" /> </a>
							<div class="extra-wrap">
								<p class="color-1 p6">
									L'immeuble est calme et très bien entretenu, hall d'accueil, espaces verts, couloir, ascenseurs.
									Il offre toutes les exigences requises en matière de confort et de sécurité.
								</p>
							</div>
						</div>
						<p class="p5">
							La résidence est un ensemble immobilier construit en 1974 par l’architecte Jean-Robert Delb.
							Ce type d'architecture était audacieux pour l'époque, l'immeuble fait en effet 28 étages, soit une demie fois 
							la tour Montparnasse. L'accès à la résidence se fait par un escalator, elle est surveillée par des agents de sécurité 
							professionnels 24h/24, 7 jours sur 7. Une batterie de 2 ascenseurs dessert le 8ème étage.
						</p>

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
