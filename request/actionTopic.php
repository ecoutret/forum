<?php 
	require_once('config.php');
	session_start();
	

	/** Function pour post un nouveau topic**/
	if(isset($_POST['newTopic'])){

		/** Recupere les valeurs**/
		$subject = $_POST['topic_subject'];
		$message = $_POST['topic_problem'];
		$type = $_GET['type'];
		$date = date("Y-m-d G:i:s");

		/** Verifie si les champs ne sont pas vide **/
		if ($subject != "" and $message!=""){
			$requestTopic = $db->prepare("SELECT * FROM `".$table_topic."` WHERE `topic_name`='".$subject."'");
			$requestTopic->execute();
			$response=$requestTopic->fetch();

			/**Evite doublons de sujet et de question pour inserer dans la base **/
			if(!$response){
				$requestNewTopic =  $db->prepare("INSERT INTO `".$table_topic."` VALUES ('', '".$subject."', '".$date."', ".$_SESSION['Id'].", '".$type."', '".$message."')");
				$requestNewTopic->execute();
			}
		}

		/** Retour à la page correspondante **/
		header('Location: ../topic.php?type='.$type);
	}

	/** Function pour poster une reponse**/
	if(isset($_POST['reponseTopic'])){

		$idTopic=$_GET['idTopic'];
		$type=$_GET['type'];
		$topic_post = $_POST['topic_post'];
		$date = date("Y-m-d G:i:s");


		if($topic_post!=''){
			$requestPost = $db->prepare("SELECT * FROM `".$table_post."` WHERE `topic_post`='".$topic_post."'");
			$requestPost->execute();
			$response=$requestPost->fetch();

			if(!$response){
				$requestAddResponse =  $db->prepare("INSERT INTO `".$table_post."` VALUES ('', '".$topic_post."',".$_SESSION['Id'].", ".$idTopic.", '".$date."')");
				$requestAddResponse->execute();
			}
		}

		header('Location: ../theTopic.php?idTopic='.$idTopic.'&type='.$type);
	}



?>