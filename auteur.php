<?php
class Auteur {
	
	private $id=null;
	private $prenom=null;
	private $nom=null;
	private $img=null;
	private $description=null;
	
	/*-----------------------GETEUR-------------*/
	public function getPrenom(){
		return $this->prenom;
	}
	public function getNom(){
		return $this->nom;
	}
	
	public function getImg(){
		return $this->img;
	}
	
	public function getDesc(){
		return $this->description;
	}
	
	public function getId(){
		return $this->id;
	}
	
	/*------------------------SETEUR-----------------*/
	public function setPrenom($psDonnees){
		$this->prenom=$psDonnees;
	}
	public function setNom($psDonnees){
		$this->nom=$psDonnees;
	}
	
	public function setImg($psDonnees){
		$this->img=$psDonnees;
	}
	
	public function setDesc($psDonnees){
		$this->description=$psDonnees;
	}
	
	public function setId($psDonnees){
		$this->id=$psDonnees;
	}
	
	/* Constructeur
	*/
	public function __construct($paDonnees=null){
	  if(!empty($paDonnees)){
		$this->setPrenom($paDonnees['prenom']); 
		$this->setNom($paDonnees['nom']); 
		$this->setId($paDonnees['id']); 
		$this->setImg($paDonnees['img']); 
		$this->setDesc($paDonnees['description']); 
	  }
     
    }
	
	/*Diverse Fonction */
	
	/*
	* Récupérer la totalité des auteurs
	*/
	public function getAll($bdd){
		$reponse = $bdd->query('SELECT * FROM `testauteur` ORDER BY nom');
		$laListeAuteur=array();
		while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)){
			$loAuteur = new Auteur($donnees);
			$laListeAuteur[]=$loAuteur;
		}
		return $laListeAuteur;
		
	}	
	/*
	* Récupérer un auteur par son id 
	*/
	public function getOneById($bdd,$piId=null){
		$loAuteur=null;
		if(!empty($piId)){
			$reponse = $bdd->query('SELECT * FROM `testauteur` WHERE id ='.$piId.' ORDER BY nom');
			
			while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)){
				$loAuteur = new Auteur($donnees);
			}
		}
		return $loAuteur;
		
	}
	
}
?>