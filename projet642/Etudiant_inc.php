<!DOCTYPE html>
<html> 
	<head>
		<meta charset = "utf-8">
		<link rel = "stylesheet" media="screen and (min-width: 1660px)" href="style2.css">
		<link rel="stylesheet" media="screen and (max-width: 1659px)" href="style3.css">
		<title>Entudiant</title>
	</head>
<?php   
        /*Connexion à la base de données sur le serveur tp-epua*/
		$conn = @mysqli_connect("tp-epua:3308", "richardn", "4d397gwj");    
		/*tp-epua:3308*/
		/*connexion à la base de donnée depuis la machine virtuelle INFO642*/
		/*$conn = @mysqli_connect("localhost", "etu", "bdtw2021");*/  

		if (mysqli_connect_errno()) {
            $msg = "erreur ". mysqli_connect_error();
        } else {  
            $msg = "connecté au serveur " . mysqli_get_host_info($conn);
            /*Sélection de la base de données*/
            mysqli_select_db($conn, "richardn"); 
            /*mysqli_select_db($conn, "etu"); */ /*sélection de la base sous la VM info642*/
		
            /*Encodage UTF8 pour les échanges avecla BD*/
            mysqli_query($conn, "SET NAMES UTF8");
        }	
	
	if (isset($_POST["button"]) and (!empty($_POST["Identifiant"])) and (!empty($_POST["Nom"])) and (!empty($_POST["Prenom"])) and (!empty($_POST["Photo"]))and (!empty($_POST["Email"]))and (!empty($_POST["Telephone"]))and (!empty($_POST["NumRue"]))and (!empty($_POST["NomRue"]))and (!empty($_POST["codeposte"]))and (!empty($_POST["ville"]))){
		$sql ="INSERT INTO Etudiant (idEtu, nomEtu, prenomEtu,photoEtu,emailEtu,telEtu,noAdrEtu,rueAdrETu,cpAdrEtu,villeETu) VALUES ('{$_POST["Identifiant"]}', '{$_POST["Nom"]}', '{$_POST["Prenom"]}','{$_POST["Photo"]}','{$_POST["Email"]}','{$_POST["Telephone"]}','{$_POST["NumRue"]}','{$_POST["NomRue"]}','{$_POST["codeposte"]}','{$_POST["ville"]}')";
		$result = mysqli_query($conn, $sql);
		if($result == 1){
			echo "<div id='affichage'><mark>L'etudiant a bien été ajouté</mark></div>";
		}

	}
 ?> 
	<body>
		<div id="box">
			<div id = "en_tete">
				<ul id="element">
					<li>
						<a href="Enseignant.php" class="logo"><b Style="color:white;font-size:20px;">POLYTECH <span Style="color:#33FFBC;">ANNECY</span></b></a>
					</li>
					
				</ul>
			</div>  
			<div id = "corps">
				<div id="menu">
				<div id="sub_menu">
					<a id="list_sub_menu" id="list_sub_menu" href ="administrateur.php" style="background-color: #48C9B0;text-align: center;">--Accueil--</a>
					<a id="list_sub_menu" href="Enseignant_inc.php" target="_blank">Enseignants</a>
					<a id="list_sub_menu" href="Etudiant_inc.php" target="_blank">Etudiants</a>		
					<a id="list_sub_menu" href="Salle.php" target="_blank">Salles</a>
					<a id="list_sub_menu" href="Horaire.php" target="_blank">Horaires</a>
					<a id="list_sub_menu" href="Entretien.php" target="_blank">Entretien</a>
					<a id="list_sub_menu" href="PassEntretien.php" target="_blank">Passe-Entretien</a>
				</div>
				</div>
				<div id="information">
					<h1> Inscrire un etudiant</h1>
					<form action="" method="post">
						<p>Identifiant: <input type="text" name="Identifiant" placeholder="Saisir le numero du dossier" /></p>
						<p>Nom : <input type="text" name="Nom" placeholder="Saisir Nom de l'etudiant"/></p>
						<p>Prenom : <input type="text" name="Prenom" placeholder=" Saisir Prenom de l'etudiant"/></p>
						<p>Photo : <input type="file" name="Photo" size=50/></p>
						<p>Adresse Electronique : <input type="text" name="Email" placeholder=" Saisir l'email de l'etudiant"/></p>
						<p>Telephone : <input type="text" name="Telephone" placeholder=" Saisir le telephone de l'etudiant"/></p>
						<p>Numero de Rue : <input type="text" name="NumRue" placeholder=" Saisir le numero de l'adresse  de l'etudiant"/></p>
						<p>Nom de Rue : <input type="text" name="NomRue" placeholder=" Saisir le nom de l'adresse  de l'etudiant"/></p>
						<p>Code Postale : <input type="text" name="codeposte" placeholder=" Saisir le code postale de l'etudiant"/></p>
						<p>Ville de L'Etudiant : <input type="text" name="ville" placeholder=" Saisir la ville  de l'etudiant"/></p>
						<p><button type="submit" name="button">Ajouter l'Etudiant</button></p>
					</form>
				</div> 
				<div id="calendrier" style="background-color:#ABB2B9;">
					<iframe src="https://calendar.google.com/calendar/embed?height=300&amp;wkst=2&amp;bgcolor=%23A79B8E&amp;ctz=Europe%2FParis&amp;src=cTJ1NmdvNTVrbzNvOGUwYXZyZzhrYnN0M29AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=dWY5Z2pvdWZ2OGY3NGx0YmVlczNkbTNmbXNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZnIuZnJlbmNoI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23616161&amp;color=%23EF6C00&amp;color=%234285F4&amp;showDate=0&amp;showNav=1&amp;showPrint=1&amp;showTabs=0&amp;showTz=1&amp;showTitle=0" style="border-width:0" width="300" height="300" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>
		</div>
		<div id="sub_body">
		<div class="col-md-3 widget">
			<h3 class="widget-title">Contact</h3>
			<div class="widget-body">			
				<p><a <a href="mailto:admission@polytech-annecy-chambery.fr" target="_top" Style="color:#33FFBC;">
					Nous écrire</a></p>
				<p>Tel: +33(0)450 096 600</p>
				<p>Polytech Annecy-Chambéry<br/>
					5 chemin Bellevue / Annecy-le-Vieux / 74940 ANNECY / FRANCE	
				</p>
			</div>
		</div>
	</div>
	</body>
</html>
