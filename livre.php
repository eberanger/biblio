<?php 
class Livre {
	
	private $id=null;
	private $titre=null;
	private $img=null;
	private $description=null;
	private $id_auteur=null;
	
	/*-----------------------GETEUR-------------*/
	public function getTitre(){
		return $this->titre;
	}
	public function getId(){
		return $this->id;
	}
	
	public function getImg(){
		return $this->img;
	}
	
	public function getDesc(){
		return $this->description;
	}
	
	public function getAuteur(){
		return $this->id_auteur;
	}
	
	/*------------------------SETEUR-----------------*/
	public function setTitre($psDonnees){
		$this->titre=$psDonnees;
	}
	public function setId($psDonnees){
		$this->id=$psDonnees;
	}
	
	public function setImg($psDonnees){
		$this->img=$psDonnees;
	}
	
	public function setDesc($psDonnees){
		$this->description=$psDonnees;
	}
	
	public function setAuteur($psDonnees){
		$this->id_auteur=$psDonnees;
	}
	
	/* Constructeur
	*/
	public function __construct($paDonnees=null) {
	  if(!empty($paDonnees)){
		$this->setTitre($paDonnees['titre']); 
		$this->setId($paDonnees['id']); 
		$this->setImg($paDonnees['img']); 
		$this->setDesc($paDonnees['description']); 
		$this->setAuteur($paDonnees['id_auteur']); 
	  }
     
	}
	
	/*Diverse Fonction */
	
	/*
	* Récupérer la totalité des livres
	*/
	public function getAll($bdd){
		$reponse = $bdd->query('SELECT * FROM testlivre ORDER BY titre');
		$laListeLivre=array();
		while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)){
			$loLivre = new Livre($donnees);
			$laListeLivre[]=$loLivre;
		}
		return $laListeLivre;
		
	}
	
	/*
	* Récupérer la totalité des livres par auteur
	*/
	public function getByAuteur($bdd,$piIdAuteur){
		$reponse = $bdd->query('SELECT * FROM testlivre WHERE id_auteur = '.$piIdAuteur.' ORDER BY titre');
		$laListeLivre=array();
		while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)){
			$loLivre = new Livre($donnees);
			$laListeLivre[]=$loLivre;
		}
		return $laListeLivre;
		
	}
	
	/*
	* Récupérer un livre par son id
	*/
	public function getOneById($bdd,$piId=null){
		$loLivre=null;
		if(!empty($piId)){
			$reponse = $bdd->query('SELECT * FROM `testlivre` WHERE id ='.$piId.' ORDER BY titre');
			
			while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)){
				
					$loLivre = new Livre($donnees);
				
				
			}
		}
		return $loLivre;
		
	}
}

?>