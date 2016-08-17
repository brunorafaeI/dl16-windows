<?php
ini_set('display_errors', 1);
define('ROOT', __DIR__);

require ROOT.'/vendor/autoload.php';

use app\database\DB;

$connect = new DB;
$connect->select("livre.titre_livre, auteur.nom_auteur")->from("livre")->join("auteur","auteur.num_auteur = livre.num_auteur");

	
	
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>INSERTION D'AUTEUR</title>

<link rel="stylesheet" href="app/css/style.css" />
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


</head>
<body>
<main class="container">
	<h1 class="muted">Formulaire</h1>
		<nav class="navbar">
			<div class="navbar-inner">
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
				</ul>
			</div>
		</nav>
	
<hearder>

</hearder>
 <aside>
	<form method="POST" action="">
		<fieldset class="form-group">
		    <label for="exampleInputId">Id:</label>
		    <input type="text" class="form-control" id="exampleInputId" name="id">
	  	</fieldset>
		<fieldset class="form-group">
		    <label for="exampleInputNom">Nom:</label>
		    <input type="text" class="form-control" id="exampleInputNom" name="nom" placeholder="Tappez votre nom...">
	  	</fieldset>
		  <fieldset class="form-group">
			    <label for="exampleInputPrenom">Prénom:</label>
			    <input type="text" class="form-control" id="exampleInputPrenom" name="prenom" placeholder="Tappez votre prénom...">
			    <small class="text-muted">Nous n'avons jamais partagé votre info avec personne.</small>
		  </fieldset>
		  <fieldset class="form-group">
			    <label for="exampleInputStatut">Statut:</label>
			    <input type="text" class="form-control" id="exampleInputStatut" name="statut" placeholder="Tappez votre statut">
		  </fieldset>
		  <fieldset class="form-group">
			    <label for="exampleInputDate">Date de naissance:</label>
			    <input type="date" name="date" class="form-control" id="exampleInputDate" >
		  </fieldset>
    
		  <button type="submit" class="btn btn-primary">Envoyer</button>
	</form>
</aside>

</main>

</body>
</html>