<?php
$the_file="calendar/ac-includes/cal.inc.php";
require_once($the_file);
?>

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
		<link rel="stylesheet" href="<?php echo AC_DIR_CSS; ?>avail-calendar.css">
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
				<h2 class="top-1 p3">Disponibilités</h2>
				<div id="cal_wrapper">
					<div id="cal_controls">
						<div id="cal_prev" title="<?php echo $lang["prev_X_months"]; ?>"><img src="<?php echo AC_DIR_IMAGES; ?>icon_prev.gif" class="cal_button"></div>
						<div id="cal_next" title="<?php echo $lang["next_X_months"]; ?>"><img src="<?php echo AC_DIR_IMAGES; ?>icon_next.gif" class="cal_button"></div>
						
						<!-- optional calendar change options -->
						<div id="cal_admin">
							<form method="get">
								<select name="id_item" class="select" onchange="this.form.submit();">
									<?php echo sel_list_items($_REQUEST["id_item"]); ?>
								</select>
								<select name="lang" class="select" onchange="this.form.submit();">
									<?php echo $list_languages_web; ?>
								</select>
							</form>
						</div>
						<!-- end options -->
					</div>
					<div id="the_months">
						<?php echo $calendar_months; ?>
					</div>
					<div id="key_wrapper">
						<?php echo $calendar_states; ?>
						<div id="footer_data" style="clear:both;">
							<?php echo $lang["last_update"].': '.get_cal_update_date(ID_ITEM); ?>
						</div>
					</div>
				</div>
				<script type="text/javascript">		
					//	define vars
					var url_ajax_cal 		= '<?php echo AC_DIR_AJAX; ?>calendar.ajax.php'; // ajax file for loading calendar via ajax
					var img_loading_day		= '<?php echo AC_DIR_IMAGES; ?>ajax-loader-day.gif'; // animated gif for loading	
					var img_loading_month	= '<?php echo AC_DIR_IMAGES; ?>ajax-loader-month.gif'; // animated gif for loading	
					//	don't change these values
					var id_item 			= '<?php echo ID_ITEM; ?>'; // id of item to be modified (via ajax)
					var lang 				= '<?php echo AC_LANG; ?>'; // language
					var months_to_show		= <?php echo AC_NUM_MONTHS; ?>; // number of months to show
					var clickable_past		= '<?php echo AC_ACTIVE_PAST_DATES; ?>'; // previous dates
				</script>
				<script type="text/javascript" src="<?php echo AC_DIR_JS; ?>mootools-core-1.3.2-full-compat-yc.js"></script>
				<script type="text/javascript" src="<?php echo AC_DIR_JS; ?>mootools-cal-public.js"></script>
			</section>


		<?php
		include "footer.php";
		?>

		<script>
			Cufon.now();
		</script>
	</body>
</html>
