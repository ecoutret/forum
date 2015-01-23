<?php 
	require_once('config.php');


	/** Verifie si le type est remplie**/
	if(isset($_GET['type'])){
		$type =  $_GET['type'];

		/** Requete pour recuperer tout les sujet topic correspondant aux choix **/
		$requestGetAll = $db->prepare("SELECT t.Id, t.topic_name, t.date_topic, t.topic_question, u.user_firstName
			FROM `".$table_topic."` t 
			INNER JOIN `".$table_user."` u 
			ON u.Id = t.id_user 
			WHERE `topic_type`='".$type."'"
		);
		$requestGetAll->execute();
		$response=$requestGetAll->fetchAll();
	}

	if(isset($_GET['idTopic']) && isset($_GET['type'])){
		$idTopic = $_GET['idTopic'];

		$requestGetTheTopic = $db->prepare("SELECT * FROM ".$table_topic." WHERE Id=".$idTopic."");
		$requestGetTheTopic->execute();
		$theTopic = $requestGetTheTopic->fetch();

		$requestGetPost = $db->prepare("SELECT * FROM ".$table_post." WHERE id_topic=".$idTopic."");
		$requestGetPost->execute();
		$allPost=$requestGetPost->fetchAll();
		
		// var_dump($TheTopic);
	}


?>