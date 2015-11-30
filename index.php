<!DOCTYPE html>
<html>
<head>
	<title>IMG'zat</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container home" id="top">
		<h1><strong>IMG'zat</strong></h1>
		<div class="row home">
			<div class="col-xs-4 login">
				<div onclick="popConnexion();" id="divLogin" class="text-center">
					<form action="#" method="post" id="formLog">
						<label id="Id">Identifiant :</label><input type="text" id="Id"/></br>
						<label id="Mdp">Mot de passe :</label><input type="text" id="Mdp"/></br>
						<button type="submit"><img src="./img/Connexion.png"></button>
					</form>
				</div>
			</div>
			<div class="col-xs-4 galerie">
				<a href=#></a>
			</div>
			<div class="col-xs-4 suscribe">
				<div onclick="popSuscribe();" id="divSuscribe" class="text-center">
					<form action="#" method="post" id="formSu">
						<label id="Pseudo">Pseudo :</label><input type="text" id="Pseudo"/></br>
						<label id="mail">E-mail :</label><input type="text" id="mail"/></br>
						<label id="Mdp">Mot de passe :</label><input type="text" id="Mdp"/></br>
						<label id="Mdpbis">Repeter mot de passe :</label><input type="text" id="Mdpbis"/></br>
						<button type="submit"><img src="./img/Inscription.png"></button>
					</form>
				</div>
			</div>
		</div>
		<div class="row next">
			<div class="col-xs-12 text-center">
				<a href="#bottom"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
			</div>
		</div>
	</div>

	<div class="container" id="bottom">
		<div class="row">
			<div class="col-xs-12 text-center">
				<a href="#top"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
			</div>
		</div>
		<div class="description">
			<div class="content">
				<p>coucou</p>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 500);
    }

});
	</script>
	<script type="text/javascript">
    function popConnexion(){
    	document.getElementById("divLogin").className = "text-center active";

      	DivSu = document.getElementById("divSuscribe");
      	if(DivSu.className == "text-center active"){
      		DivSu.className = "text-center";
      	}

    }

    function popSuscribe(){
    	document.getElementById("divSuscribe").className = "text-center active";

      	DivLog = document.getElementById("divLogin");
      	if(DivLog.className == "text-center active"){
      		DivLog.className = "text-center";
      	}

    }
</script>
</body>
</html>