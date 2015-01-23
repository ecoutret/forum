$( document ).ready(function() {
	
	// function getURLParameter(url, name) {
 //    	return (RegExp(name + '=' + '(.+?)(&|$)').exec(url)||[,null])[1];
	// }
	
	$('#inscription').on('click', function(){
		$('#subscribe').fadeIn(2000);
		$('.filtre').fadeIn(1500);

	});

	$('#connexion').on('click', function(){
		$('#signIn').fadeIn(2000);
		$('.filtre').fadeIn(1500);
	});

	$('.close').on('click' , function(){
		$('#subscribe').fadeOut(1000);
		$('#signIn').fadeOut(1000);
		$('.filtre').fadeOut(1000);
		$('#close').fadeOut(1000);
	})
});