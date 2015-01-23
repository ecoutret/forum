<?php 
	require_once('config.php');
	session_start();
	/** Connexion **/
	if(isset($_POST['connexion'])){
		$name = $_POST['user_name'];
		$mail = $_POST['user_mail'];
		
		if($name != '' && $mail!=''){

			/**Requete sql**/
			$requestUser = $db->prepare("SELECT * FROM `".$table_user."` WHERE `user_firstName`='".$name."' AND `user_mail`='".$mail."' LIMIT 1");
			$requestUser->execute();
			$response=$requestUser->fetch();

			/** Instancier la session **/
			$_SESSION['Id']=$response['Id'];
			$_SESSION['user_mail']=$response['user_mail'];
			$_SESSION['user_firstName']=$response['user_firstName'];
		}
	}

	/** Inscription **/
	if(isset($_POST['inscription'])){
		$firstName = $_POST['user_firstName'];
		$lastName = $_POST['user_name'];
		$mail = $_POST['user_mail'];
		$date = date("Y-m-d G:i:s");

		/** Si tout les champs sont remplis **/
		if($firstName != '' && $mail!='' && $lastName!=''){

			/**Requete sql**/
			$requestUser = $db->prepare("SELECT * FROM `".$table_user."` WHERE `user_mail`='".$mail."'");
			$requestUser->execute();
			$response=$requestUser->fetch();

			if(!$response){
				$requestNewUser =  $db->prepare("INSERT INTO `".$table_user."` VALUES ('', '".$firstName."', '".$lastName."', '".$mail."', '".$date."')");
				$requestNewUser->execute();

				$requestUser = $db->prepare("SELECT * FROM `".$table_user."` WHERE `user_firstName`='".$firstName."' AND `user_mail`='".$mail."' LIMIT 1");
				$requestUser->execute();
				$response=$requestUser->fetch();

				/** Instancier la session **/
				$_SESSION['Id']=$response['Id'];
				$_SESSION['user_mail']=$response['user_mail'];
				$_SESSION['user_firstName']=$response['user_firstName'];
			}
		}
	}

	if($_GET['session']){
		session_destroy();
	}

	$page = $_GET['page'];

	if($_GET['type']){
		$page .= '?type='.$_GET['type'];
	}
	if($_GET['idTopic']){
		$page .= '&idTopic='.$_GET['idTopic'];
	}

	header('Location: ../'.$page);

?>