<?php require_once('request/constant.php'); ?>
<?php require_once('content/header.html'); ?>


<div class="all_subject">
	
	<div class="subject">
		<a href="topic.php?type=android">
			<div class="logo_subject android"><img src="<?php echo WEBROOT; ?>public/css/images/icon_android.png"/></div>
			<div class="info_subject">
				<span>Android</span><br>
				Toutes vos questions et réponses sur le développement sous Android
			</div>
		</a>
	</div>

	<div class="subject">
		<a href="topic.php?type=ios">
			<div class="logo_subject ios"><img src="<?php echo WEBROOT; ?>public/css/images/icon_ios.png"/></div>
			<div class="info_subject">
				<span>IOS</span><br>
				Posez toutes vos questions concernant le développement Iphone et Ipad (Objectif-C ou Swift)
			</div>
		</a>
	</div>

	<div class="subject">
		<a href="topic.php?type=win">
			<div class="logo_subject win"><img src="<?php echo WEBROOT; ?>public/css/images/icon_window.png"/></div>
			<div class="info_subject">
				<span>WinDev</span><br>
				Un projet Windows phone ? N’hésitez pas à poser vos questions ou a fournir vos solutions
			</div>
		</a>
	</div>
</div>


<div class ="information">
	<div style="margin-top:23px;">Bienvenue sur XXX,</div>
	<div style="margin-top:13px;">le forum dédié au développement mobile</div>
	<div style="margin-top:19px;">Découvrez et partagez vos</div>
	connaissance sur le développement mobile
</div>
<br>

<?php require_once('content/form_connect.html');?>
<?php require_once('content/footer.html'); ?>