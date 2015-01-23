<?php require_once('request/constant.php'); ?>
<?php require_once('content/header.html'); ?>
<?php require_once('request/getInfos.php');?>

<div class="all_question">
	<?php foreach ($response as $key => $value) : ?>
		<div class="the_question">
			
			<a href="theTopic.php?idTopic=<?php echo $value['Id']; ?>&type=<?php echo $_GET['type']; ?>">
				<div class="subject">
					<span><?php echo $value['topic_name']; ?></span><br/>
					<?php echo $value['topic_question']; ?>
					<span class="info">15/11/2014 par Louis Halter</span>
				</div>
			</a>

		</div>
	<?php endforeach; ?>
</div>

<div class="post">
	Creer un topic
	<form method="post" action="request/actionTopic.php?type=<?php echo  $_GET['type']; ?>">
		<input type="text" name="topic_subject" placeholder="sujet" autocomplete="off"  <?php if(!$_SESSION){echo 'disabled '; } ?> />
		<textarea name="topic_problem" placeholder="message" autocomplete="off" <?php if(!$_SESSION){echo 'disabled '; } ?> /></textarea>
		<input type="submit" name="newTopic" value="Poster"/>
	</form>
</div>

<?php require_once('content/form_connect.html');?>
<?php require_once('content/footer.html'); ?>