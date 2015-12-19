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
			
			$loAuteur = new Auteur();
			$loAuteur = $loAuteur->getOneById($bdd,$liId);
			
			/*Verifier que l'auteur existe en base*/
			if($loAuteur!=null){
				
				/*affichage info de l'auteur */
				echo "<div>
				<h1>".$loAuteur->getNom()." ".$loAuteur->getPrenom()."</h1>";
						
				echo "<p>".'<img width="50" height="50" src="'.$loAuteur->getImg().'" alt=""/></p>';
				echo "<p>".$loAuteur->getDesc()."</p>";

				$loLivre = new Livre();
				$laLivre = $loLivre->getByAuteur($bdd,$loAuteur->getId());
				echo "<h2> Les Livres de l'auteur</h2>";
				echo '<ul>';
					foreach($laLivre as $loLivreL){
						echo '<li>';
						echo "<p>".$loLivreL->getTitre()."</p>";
						echo "<a href='viewlivre.php?id=".$loLivreL->getId()."'>Détail du livre</a> <br/>";
						echo '</li>';
						
					}
				echo '</ul>';

				echo "<a href='index.php'>Liste des livres</a>";
				
				echo "</div>";

			}else{
				echo "l'id de l'auteur n'existe pas.";
			}
		}else{
			echo "l'id de l'auteur n'est pas valable.";
		}
		?>

	</body>
</html>