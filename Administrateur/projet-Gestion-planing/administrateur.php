<DOCTYPE html>



<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> page Admin </title>
		


	</head>

	<?php

	/*Connexion à la base de données sur le serveur tp-epua*/

	$conn = @mysqli_connect("tp-epu:3308", "abdoumaz","tfmgvf34");    

	/*connexion à la base de donnée depuis la machine virtuelle INFO642*/

	/*$conn = @mysqli_connect("localhost", "etu", "bdtw2021");*/  



	if (mysqli_connect_errno()) {

		$msg = "erreur ". mysqli_connect_error();

	} else {  

		$msg = "connecté au serveur " . mysqli_get_host_info($conn);

		/*Sélection de la base de données*/

		mysqli_select_db($conn, "abdoumaz"); 

		/*mysqli_select_db($conn, "etu"); */ /*sélection de la base sous la VM info642*/



		/*Encodage UTF8 pour les échanges avecla BD*/

		mysqli_query($conn, "SET NAMES UTF8");

	}

	?>
	<body>
		<img src="Logo_Polytech.png">
		<div id="leftsidenav">
			<p> choisissez quel type de données vous voulez rentrer </p>

			<a href="Enseignant.php" target="_blank">Enseignants</a><br/>

			<a href="Etudiant.php" target="_blank">Etudiants</a><br/>

			<a href="Salle.php" target="_blank">Salles</a><br/>

			<a href="Horaire.php" target="_blank">Horaires</a><br/>

			<a href="Entretien.php" target="_blank">Entretien</a></br>
	</div>
	</body>

</html>


