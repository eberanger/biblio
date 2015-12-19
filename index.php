<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Liste Livres</title>
    </head>

    <body>
		<?php

		include 'cobdd.php';
		include 'livre.php';
		include 'auteur.php';
		
		
		$loLivre = new Livre();
		
		/*Récupérer les livres*/
		/*Si l'id de tri present récupérer seulement les livres d'un auteur*/
		if(isset($_GET['id_auteur']) && is_numeric($_GET['id_auteur'])){
			$laListe=$loLivre->getByAuteur($bdd,$_GET['id_auteur']);
			$liIdAuteur = $_GET['id_auteur'];
		}else{
			$laListe=$loLivre->getAll($bdd);
			$liIdAuteur==null;
		}
		?>
		
		<div>
		<h1>Liste des Livres</h1>
		<select onchange="if (this.value) window.location.href=this.value">
			<option value="index.php">Tous les livres</option> 
			<?php
			   /*Récupérer la liste des auteurs*/
				$loListeAuteur = new Auteur();
				$laListeAuteur = $loListeAuteur->getAll($bdd);
				foreach($laListeAuteur as $loAuteurL){
					echo "<option value='index.php?id_auteur=".$loAuteurL->getId()."'";
					if($loAuteurL->getId()==$liIdAuteur){
						echo ' selected';
					}
					echo ">".$loAuteurL->getNom()." ".$loAuteurL->getPrenom()."</option>";
				}
			?>		
		</select>
		<table>
				<tr>
				  <th>Id</th>
				  <th>Titre</th>
				  <th>Nom Prénom de l'auteur</th>
				  <th>Lien Livre</th>
				  <th>Lien Auteur</th>
				</tr>

			<?php
			/*Affichage de tout les livres*/
			foreach($laListe as $loLivreL){
				$loAuteur = new Auteur();
				$loAuteur = $loAuteur->getOneById($bdd,$loLivreL->getAuteur());
				echo '<tr>';
				echo "<td>".$loLivreL->getId()."</td>";
				echo "<td>".$loLivreL->getTitre()."</td>";
				echo "<td>".$loAuteur->getNom()." ".$loAuteur->getPrenom()."</td>";
				echo "<td><a href='viewlivre.php?id=".$loLivreL->getId()."'> Détail du livre</a></td>";
				echo "<td><a href='viewauteur.php?id=".$loAuteur->getId()."'> Détail de l'auteur</a></td>";
				echo '</tr>';
			}
			echo "</table>";
			echo "</div>";
			?>
	</body>
</html>