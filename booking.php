<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ParisLocStudio | Booking</title>
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
						<h2 class="top-1 p3">Contacts</h2>
						<div class="wrap">
							<a class="elastic img-border img-indent" href="images/mrbnb/us.JPG" data-fancybox-group="gallery"> <img src="images/mrbnb/us_mini.JPG" alt="Us" /> </a>
							<div class="extra-wrap">
								<p class="color-1 p6">
									Par téléphone de 19h00 à 21h30 :
									<br />
									- depuis la France : 09 51 72 81 16 (Tarif d'un appel local)
									<br />
									- depuis l'étranger : +33 951 72 81 16
									<br />
									Fax : 09 56 72 81 16
									<br />
									E-Mail : booking@parislocstudio.fr
								</p>
								<p>
									Le prix inclut :
									<br />
									- la fourniture du linge de maison pour la durée de votre séjour (couette, housse de couette, draps, serviettes, torchons,…)
									- les charges : eau, chauffage, électricité, taxes, ...
									- le ménage de l'appartement avant votre arrivée. Vous devez assurer le ménage à votre départ.
								</p>
							</div>
						</div>

						<a href="disponibility.php">
							<h2 class="top-2 p3">RESERVATION</h2>
						</a>
						<div class="wrap">
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb05.JPG" data-fancybox-group="gallery">
								<img src="images/mrbnb/mrbnb05_mini.JPG" alt="Us" />
							</a>
							<div class="extra-wrap">
								<p class="color-1 p6">
									1 - Vérifiez tout d'abord la disponibilité du studio pour la période désirée en vous rendant à la rubrique <a href="disponibility.php">Disponibilité</a> et contactez nous par E-mail ou par téléphone.
									<br />
									Si le studio est disponible et que vous souhaitez réserver :
									<br />
									2 - Envoyez alors par E-mail ou donnez nous par téléphone :
									- vos Nom, Prénom et coordonnées complètes (Adresse, Téléphones, E-mail),
									- vos date et lieu de naissance.
								</p>
							</div>
						</div>
						<p class="p5">
							Ces informations nous sont nécessaires pour établir votre contrat de location.
							Nous vous adresserons par retour du courrier un Contrat de Location Saisonnière en deux exemplaires pour signature. Nous vous demandons de nous retourner rapidement un exemplaire signé par retour de courrier et d'en conserver un.
							Le contrat signé devra être accompagné :
							- des arrhes soit par chèque soit par virement bancaire sur notre compte de 25 % du montant du loyer de votre séjour. Ces arrhes seront déduites du montant total du loyer de votre séjour. Pour connaître le montant du loyer de votre séjour, rendez vous à la rubrique Tarifs.
							- une copie d'une pièce d'identité (Carte d'Identité, Passeport et pour les personnes résidentes hors de la CE une copie du titre de séjour ou du visa).
							<br />
							L'appartement sera considéré comme réservé lorsque nous recevrons les arrhes de réservation, le contrat de location saisonnière signé et la copie de votre pièce d'identité.
							Pour les paiements par chèques de banque étrangère, un supplément de 15 euros vous sera demandé pour participation au frais bancaires.
							<br />
							3 - Dés réception des arrhes et des informations si dessus, votre réservation vous sera confirmée par courrier.
							<br />
							4 - À votre arrivée, lors de la remise des clés, un état des lieux sera dressé et une caution de 400 euros vous sera demandée. Cette caution ne sera pas encaissée et vous sera intégralement restituée lors de l'état des lieux de départ, dans la mesure ou aucune dégradation n'aura été commise pendant votre séjour.
						</p>

						<h2 class="top-2 p3">DERNIERE MINUTE</h2>
						<div class="wrap">
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb03.JPG" data-fancybox-group="gallery"> <img src="images/mrbnb/mrbnb03_mini.JPG" alt="Us" /> </a>
							<div class="extra-wrap">
								<p class="color-1 p6">
									Pour vos déplacements de dernière minute, si après avoir vérifié la Disponibilité du studio celui ci est libre, contactez nous rapidement par téléphone ou par E-mail pour prendre rendez-vous pour votre arrivée. L'ensemble des formalités (signature du contrat, paiement du loyer, état des lieux d'arrivée) seront alors réalisées sur place lors de la remise des clés.
								</p>
							</div>
						</div>

						<h2 class="top-2 p3">ANNULATION DE RESERVATIONS</h2>
						<div class="wrap">
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb13.JPG" data-fancybox-group="gallery"> <img src="images/mrbnb/mrbnb13_mini.JPG" alt="Us" /> </a>
							<div class="extra-wrap">
								<p class="color-1 p6">
									En cas de désistement du loueur :
									- à plus de un mois avant la prise d'effet du contrat de location, le locataire perd la moitié des arrhes versées,
									- à moins de un mois avant la prise d'effet du contrat le locataire perd la totalité des arrhes versées.

									En cas de désistement des propriétaires, ceux-ci seront tenus de verser une fois et demi les arrhes au locataire.
								</p>
							</div>
						</div>
						<p>
							Grâce à une assurance annulation, vous pouvez réserver une location tout en restant assuré de récupérer vos arrhes si vous êtes dans l'impossibilité de voyager à cause d'attaques terroristes dans ce pays (veuillez vérifier avec votre agence de voyages ou auprès de votre assurance-voyage). Nous vous recommandons d'acheter ce type d'assurance au moment de votre réservation (bien que non obligatoire) afin de vous dédommager dans l'éventualité où vous deviez annuler.

							Les autorités Françaises exigent que vous soyez titulaire d'une assurance voyage couvrant la santé, les accidents et la responsabilité civile pendant l'occupation d'une location saisonnière.
						</p>

						<h2 class="top-2 p3">ASSURANCES</h2>
						<div class="wrap">
							<a class="elastic img-border img-indent" href="images/mrbnb/mrbnb07.JPG" data-fancybox-group="gallery"> <img src="images/mrbnb/mrbnb07_mini.JPG" alt="Us" /> </a>
							<div class="extra-wrap">
								<p class="color-1 p6">
									Le titulaire du contrat de location est responsable de toute dégradation de la propriété ou de son contenu par sa faute ou par l'un de ses invités pendant la durée de location. Vous devez vérifier que votre assurance personnelle (habitation principale, responsabilité civil, …) couvre vos locations saisonnières ou, à défaut, souscrire une assurance pour la durée de la location du studio. Notre appartement est inscrit à une assurance responsabilité civile et risques de locations mais n'est pas couvert pour les vols d'effets personnels à l'intérieur.
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
