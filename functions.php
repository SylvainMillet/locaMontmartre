<?php

/* Configure le script en français */
setlocale (LC_TIME, 'fr_FR','fra');
//Définit le décalage horaire par défaut de toutes les fonctions date/heure  
date_default_timezone_set("Europe/Paris");
//Definit l'encodage interne
mb_internal_encoding("UTF-8");


//Convertir une date US vers une date en français affichant le jour de la semaine
function formatDate($date){

	$strDate = mb_convert_encoding('%d %B','ISO-8859-9','UTF-8');    
    $strDateReturn = iconv("ISO-8859-9","UTF-8",strftime($strDate ,strtotime($date)));
	echo $strDateReturn;
}



// Fonction pour resumer les articles à un nombre de caracteres definis
function resumerArticle($article){
	$nbr=600;
	if(strlen($article)>=$nbr)
		{
	 	$articlecoupe=substr($article,0,$nbr); 
	 	$espace=strrpos($articlecoupe," "); 
	 	 if($espace){
			$articlecoupe=substr($articlecoupe,0,$espace);
	 	 }
	  $articlecoupe .="...";
	}
	else {$articlecoupe = $article;}
	return $articlecoupe;
}


// fonction de connexion à la base de données
function connexionBDD(){
	try{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=rdbms.strato.de;dbname=DB1590045', "U1590045", "!ggr1!73grang3",$pdo_options);
		$bdd ->exec("SET CHARACTER SET utf8");
		return $bdd;
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}
}

//fonction pour ajouter un commentaire à l'article
function fctAddBillComment($bdd, $bill){
	$title = addslashes($_POST['comment_title']);
	$label = addslashes($_POST['comment_label']);
	$user = addslashes($_POST['comment_user']);
	$requete = $bdd->query("INSERT INTO `fleurs`.`comment` (`comment_bill`, `comment_title`, `comment_label`, `comment_user`, `comment_date`) 
							VALUES ('".$_GET['id']."', '".$title."', '".$label."', '".$user."', '".date('y-m-d')."')");
}

//fonction d'affichage de la galerie d'images
function fctGalery($bdd){
		$reponse = $bdd->query('SELECT id_picture, picture_description, picture_address_mini, picture_address_normal, picture_addDate, picture_performance, performance.id_performance, performance.performance_type
							 	FROM picture, performance
							 	WHERE picture.picture_performance = performance.id_performance');
		return $reponse;
}

//fonction d'affichage de la galerie d'images par catégorie
function fctGaleryPerformance($bdd){
		$reponse = $bdd->query('SELECT id_picture, picture_description, picture_address_mini, picture_address_normal, picture_addDate, picture_performance, performance.id_performance, performance.performance_type
							 	FROM picture, performance
							 	WHERE picture.picture_performance = performance.id_performance AND performance.id_performance='.$_POST['selected_performance'].'');
		return $reponse;
}

//fonction pour afficher les partenaires
function fctPartners($bdd){
	$reponse = $bdd->query('SELECT id_partner, partner_name, partner_url, partner_label, picture.id_picture, picture.picture_address_normal
							FROM partner, picture
							WHERE partner.partner_picture = picture.id_picture');
	return $reponse;
}

function recordUser($bdd){	
	$requete = $bdd->query("INSERT INTO `fleurs`.`user` (`user_name`, `user_forname`,`user_age`, `user_mail`, `user_address`, `user_zipcode`, `user_city`, `user_lastmessage`) 
							VALUES ('".$_POST['lbl_userName']."', '".$_POST['lbl_userForname']."', '".$_POST['lbl_userAge']."', '".$_POST['email']."', '".$_POST['lbl_userAddress']."', '".$_POST['lbl_userZipCode']."', '".$_POST['lbl_userCity']."', '".date('y-m-d')."')");
}

?>