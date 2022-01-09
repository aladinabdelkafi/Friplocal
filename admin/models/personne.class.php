<?php
class personne extends fonction{
	private $id;
	private $nom_pers;
	private $prenom_pers;
	private $email_pers;
	private $mdp_pers;
	private $tel_pers;
	private $id_role;
	private $status;



	public function __construct($id,$nom_pers,$prenom_pers,$email_pers,$mdp_pers,$tel_pers,$id_role,$status){
		$this->id = $id;
		$this->nom_pers = $nom_pers;
		$this->prenom_pers = $prenom_pers;
		$this->email_pers = $email_pers;
		$this->mdp_pers = $mdp_pers;
		$this->tel_pers = $tel_pers;
		$this->id_role = $id_role;		
		$this->status = $status;

	}
	


	public function add($cnx){
		$res=$cnx->prepare("insert into personne (id_role,nom_pers, prenom_pers,email_pers, mdp_pers, tel_pers,status) values(?,?,?,?,?,?,?)");

		$this->redirect("dsharboard.php?controller=personne&action=liste");
	}
	
	public function edit($cnx){
		$res=$cnx->prepare("update personne set nom_pers=?,prenom_pers=?,email_pers=?,mdp_pers=?,tel_pers=?,status=? where id=?");
		$res->bindParam(1,$this->nom_pers);
		$res->bindParam(2,$this->prenom_pers);
		$res->bindParam(3,$this->email_pers);
		$res->bindParam(4,$this->mdp_pers);
		$res->bindParam(5,$this->tel_pers);
		$res->bindParam(6,$this->status);
		$res->bindParam(7,$this->id);
		$res->execute();
		$this->redirect("dashboard.php?controller=personne&action=liste"); 
	}
	
	public function supp($cnx){
		
		$cnx->exec("delete from personne where id='".$this->id."'");
		$this->redirect("dashboard.php?controller=personne&action=liste");
	}
	 
	public function liste($cnx,$critere){ 
		
		$personnes=$cnx->query("select * from personne ".$critere)->fetchAll(PDO::FETCH_OBJ);
		return $personnes;
	}
	
	public function detail($cnx){
		//echo $this->id;
		$personne=$cnx->query("select * from personne where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
		//print_r($personne);
		//exit();
		
		return $personne;
	}
	
	public function login($cnx){
$personne=$cnx->query("select * from personne where email_pers='".$this->email_pers."' and mdp_pers='".$this->mdp_pers."'")->fetch(PDO::FETCH_OBJ);
if(is_object($personne)){
	$_SESSION['email_pers']=$this->email_pers;
	$_SESSION['mdp_pers']=$this->mdp_pers;
	$_SESSION['id']=$personne->id;
	$_SESSION['id_role']=$personne->id_role;

	if($personne->id_role=='1'){
		$this->redirect("dashboard.php");
	}else {
		$this->redirect("index.php");

	}
}else{
	$this->redirect("login.php?error=1");
}
	}
	
	public function logout(){
	session_destroy();
	$this->redirect("login.php");
	}

	public function count($cnx,$critere){
		$nb=$cnx->query("select count(*) from personne where status='".$critere."'")->fetch(PDO::FETCH_OBJ);
		return $nb;
	}



}
?>