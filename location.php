<?php
require ('GoogleMapAPI.class.php');

$mapStudio = new GoogleMapAPI('mapStudio');
$mapStudio -> setWidth("500px");
$mapStudio -> setHeight("400px");
$mapStudio -> setCenterCoords('2.343403', '48.886660');
$mapStudio -> setZoomLevel(14);
$mapStudio -> addMarkerByCoords(2.3624665, 48.8939715, "Studio ParisLocStudio", "Retrouvez nous ici", "Bienvenue à Paris");
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>ParisLocStudio | Location</title>
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

		<?php
		$mapStudio -> printHeaderJS();
		$mapStudio -> printMapJS();
		?>

		<body onload="onLoad();">
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
								<li class="current">
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
							<h2 class="top-1 p3">Situation et accès</h2>
							<div class="wrap">
								<a class="elastic img-border img-indent" href="images/residence/residence2.JPG" data-fancybox-group="gallery"> <img src="images/residence/residence2_mini.JPG" alt="Residence" /> </a>
								<div class="extra-wrap">
									<p class="color-1 p6">
										Le studio est situé au N°8 de la rue Boucry, à deux pas du marché de la chapelle et de la rue de l'olive
										dans un quartier typiquement parisien qui a gardé son caractère populaire.
									</p>

								</div>
								<a href="booking.php" class="button">Réserver</a>
								<br />
								<br />
								<?php
								$mapStudio -> printMap();
								?>
								<h2 class="top-2 p3">Accès</h2>
								<p>
									La station de métro Marx Dormoy sur la ligne 12 est la plus proche, située à 500 mètres soit 6 minutes à pied.
									La ligne 12 traverse tout Paris en passant des quartiers les plus populaires aux quartiers les plus huppés 
									de la capitale situés rive gauche, ce qui rend l'accès direct à tous les principaux sites touristiques. 
									Elle passe en effet par les stations Abbesses (Montmartre), Pigalle, Gare Saint Lazare, Madeleine, Concorde 
									(au bas des Champs-Élysées et à l'entrée du jardin des Tuileries et du Louvre), Assemblée Nationale, Solferino, 
									Rue de Rennes, Gare Montparnasse, Sèvres Babylone, et Porte de Versailles (Palais des expositions).
								</p>
							</div>
							
							<div class="wrap">
								<a class="elastic img-border img-indent" href="images/residence/residence1.JPG" data-fancybox-group="gallery"> <img src="images/residence/residence1_mini.JPG" alt="Residence" /> </a>
								<div class="extra-wrap">
									<p>
										Le studio est également très proche de la Gare de l'Est et de la Gare du Nord desservies par la ligne 4. 
										En voiture, il est a coté de la porte de la Chapelle et de l'Autoroute A1.
									</p>
								</div>
							</div>
							<p>
								Du studio on se rend à pied en 25 minutes sur les coteaux de la butte Montmartre qui sont visibles depuis la loggia.
							</p>
							<br />
							<a href="booking.php" class="button">Réserver</a>
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

			<script>Cufon.now();</script>
		</body>
</html>

