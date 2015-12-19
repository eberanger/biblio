<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Livre</title>
    </head>

    <body>
		<?php

		include 'cobdd.php';
		include 'livre.php';
		include 'auteur.php';
		
		$liId = $_GET['id'];
		
			
		/*Verifier que l'id est bien numeric*/	
		if(is_numeric($liId)){
			
			$loLivre = new Livre();
			$loLivre = $loLivre->getOneById($bdd,$liId);
			
			/*Verifier que le livre existe en base*/
			if($loLivre!=null){
				
				/*affichage info du livre */
				echo "<div>
				<h1>".$loLivre->getTitre()."</h1>";
						
				echo "<p>".'<img width="50" height="50" src="'.$loLivre->getImg().'" alt=""/></p>';
				echo "<p>".$loLivre->getDesc()."</p>";

				$loAuteur = new Auteur();
				$loAuteur = $loAuteur->getOneById($bdd,$loLivre->getAuteur());

				echo "<p>".$loAuteur->getNom()." ".$loAuteur->getPrenom()."</p>";
				echo "<a href='viewauteur.php?id=".$loAuteur->getId()."'>Détail de l'auteur</a> <br/>";
				echo "<a href='index.php'>Liste des livres</a>";


				echo "</div>";

			}else{
				echo "l'id du livre n'existe pas.";
			}
		}else{
			echo "l'id du livre n'est pas valable.";
		}
		?>

	</body>
</html>