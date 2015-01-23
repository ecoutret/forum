<?php

$host='localhost';
$dbname='tester_fat';
$login='root';
$mdp='';

$table_user='user';
$table_topic='topic';
$table_post='post_topic';

try{
	$db = new PDO('mysql:host='.$host.';dbname='.$dbname, $login, $mdp);
}
  
catch(Exception $e)
{
        echo 'Une erreur est survenue !';
        die();
}
?>