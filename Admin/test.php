<!DOCTYPE html>
<html>
<head>
	<title>Ajout d'une leçon</title>
	<style type="text/css">
		label {
			display: block;
			margin-bottom: 5px;
		}
		input[type="text"], select {
			padding: 5px;
			margin-bottom: 10px;
			width: 100%;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Ajout d'une leçon</h1>
	<form action="ajout_lecon.php" method="POST" enctype="multipart/form-data">
		<label for="titre_lecon">Titre de la leçon :</label>
		<input type="text" name="titre_lecon" required>

		<label for="cours_pdf">PDF du cours :</label>
		<input type="file" name="cours_pdf" accept="application/pdf" required>

		<label for="exercice_pdf">PDF des exercices :</label>
		<input type="file" name="exercice_pdf" accept="application/pdf" required>

		<label for="video">Vidéo MP4 :</label>
		<input type="file" name="video" accept="video/mp4" required>

		<label for="annee">Année :</label>
		<select name="annee" required>
			<option value="">Sélectionnez une année</option>
			<?php
				// Connexion à la base de données
				$bdd = new PDO('mysql:host=localhost;eprof1;charset=utf8', 'rooot', '');

				// Requête pour récupérer les années
				$annees = $bdd->query('SELECT id_annee, annee, nom_cycle FROM Annee INNER JOIN Cycle ON Annee.id_cycle = Cycle.id_cycle ORDER BY annee ASC');

				// Affichage des options dans la liste déroulante
				while ($annee = $annees->fetch()) {
					echo '<option value="' . $annee['id_annee'] . '">' . $annee['annee'] . ' - ' . $annee['nom_cycle'] . '</option>';
				}

				// Fermeture de la connexion à la base de données
				$annees->closeCursor();
			?>
		</select>

		<label for="matiere">Matière :</label>
		<select name="matiere" required>
			<option value="">Sélectionnez une matière</option>
			<?php
				// Requête pour récupérer les matières
				$matieres = $bdd->query('SELECT id_matiere, nom_matiere FROM Matiere');

				// Affichage des options dans la liste déroulante
				while ($matiere = $matieres->fetch()) {
					echo '<option value="' . $matiere['id_matiere'] . '">' . $matiere['nom_matiere'] . '</option>';
                }
                			// Fermeture de la connexion à la base de données
			$matieres->closeCursor();
            ?>
        </select>
    
        <input type="submit" value="Ajouter la leçon">
    </form>
    
