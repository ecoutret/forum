<?php require_once('request/constant.php'); ?>
<?php require_once('content/header.html'); ?>
<?php require_once('request/getInfos.php');?>

<br>Le topic<br>

<b><?php echo $theTopic['topic_name']; ?><br>
<?php echo $theTopic['topic_question']; ?></b>

<br>Les reponse <br>
<?php foreach ($allPost as $key => $value) :?>
	<?php echo $value['topic_post']; ?>
<?php endforeach; ?>

<form method="post" action="request/actionTopic.php?type=<?php echo  $_GET['type']; ?>&idTopic=<?php echo  $_GET['idTopic']; ?>">
	<textarea name="topic_post" placeholder="message" autocomplete="off" <?php if(!$_SESSION){echo 'disabled '; } ?>/></textarea>
	<br>
	<input type="submit" name="reponseTopic" value="Aider"/>
</form>

<?php require_once('content/form_connect.html');?>
<?php require_once('content/footer.html'); ?>