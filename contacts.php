<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ParisLocStudio | Contacts</title>
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
							<li class="current">
								<a href="contacts.php">Contacts</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>
			
			<?php
				ini_set('SMTP','smtp.strato.com');

				if(isset($_POST['email']) and isset($_POST['sujet']) and isset($_POST['message']))
				{
					$destinataire = 'pascal.molimard@gmail.com, s.millet@smilly.fr';
					$email = htmlentities($_POST['email']);
					if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',str_replace('&amp;','&',$email)))
					{
						$sujet = 'Contact ParisLocStudio: '.stripslashes($_POST['sujet']);
						$message = stripslashes($_POST['message']);
						$headers = "From: <".$email.">\n";
						$headers .= "Reply-To: ".$email."\n";
						$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
						if(mail($destinataire,$sujet,$message,$headers))
						{
							echo '<strong>Votre message a bien &eacute;t&eacute; envoy&eacute;.</strong>';
						}
						else
						{
							echo '<strong style=\"color:#ff0000;\">Une erreur s\'est produite lors de l\'envoi du message.</strong>';
						}
					}
					else
					{
						echo '<strong style=\"color:#ff0000;\">L\'email que vous avez entr&eacute; est invalide.</strong>';
					}
				}
				else
				{
			?>
			
			<section id="content">
				<div class="container_12">
					<div class="grid_8">
						<h2 class="top-1 p3">Formulaire de contact</h2>
							<form id='contact' method="POST" action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>">
								<div class="form_user">
									<label for="mail">Email</label>
									<input type="email" name="email" id="mail" size='35' />										
								</div>

								<div class="form_user">
									<label for="sujet">Objet du message</label>
								</div>
								<div>
									<input type="text" name="sujet" tabindex='10' size='30' />										
								</div>

								<div class="form_user">
									<label for="message">Message</label>
								</div>
								<div>
									<textarea name="message" rows="8" cols="60" id="message" placeholder="Pensez à nous préciser votre numéro de téléphone si vous souhaitez être contacté rapidement..."></textarea>
								</div>
							
								<input type="submit" name ="submit" value="Envoyer" />
							</form>
							
							<?php
								
								}
							?>
							
							<br />
							<a href="booking.php" class="button">Réserver</a>
							
							<h2 class="top-1 p3">Contacts</h2>
							<div class="wrap">
								<a class="elastic img-border img-indent" href="images/mrbnb/us.JPG" data-fancybox-group="gallery"> <img src="images/mrbnb/us_mini.JPG" alt="Us" /> </a>
								<div class="extra-wrap">
									<p class="color-1 p6">
										Bonjour,
										<br />
										Nous vivons à Paris dans le 18eme arrondissement, tout prés du studio. 
										Jean-François est né à Paris et Pascal y vie depuis de très nombreuses années. 
										Nous connaissons donc très bien Paris et le quartier, nous pourrons vous indiquer les meilleurs endroits à découvrir.
										<br />
										<br />
										Jean-François parle français, anglais et espagnol et Pascal parle français et anglais.
										<br />
										Nous serons ravis de vous accueillir dans notre petit studio récemment rénové, très calme. 
										Nous sommes sportifs et nous pratiquons la course à pied et le vélo. Jean-François pratique également le triathlon. 
										Si vous voulez découvrir Paris en courant lors d’un running dans la ville dimanche matin, 
										c’est avec plaisir que vous pourrez vous joindre à nous !
										<br />
										A très bientôt à Paris !
										<br />
										<br />
										Pascal & Jean-François
									</p>
								</div>
							</div>
							
						<h2 class="top-1 p3">ParisLocStudio respecte vos données</h2>
						<p>
							ParisLocStudio s'engage à ne pas diffuser vos informations à un tiers.<br/>
							Conformément à la loi Informatique et Libertés du 6 janvier 1978, vous disposez d'un droit d'accès et de 
							rectification à vos données personnelles.<br/>
							Pour toute demande, contactez notre administrateur à l'adresse webmaster@parislocstudio.fr
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
