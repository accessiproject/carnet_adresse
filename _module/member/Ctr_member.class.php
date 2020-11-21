<?php

class Ctr_member extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("member", $action);
        $this->table="user";
        $this->classTable = "User";
        $this->cle = "user_id";
        $a = "a_$action";
        $this->$a();
    }
	
	function a_showprofil() {
		$profil=User::verification($_SESSION["user_email"]);
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_editprofil() {
		include 'validFluent.php';
		$vf = new ValidFluent($_POST);
		$u=new User($_GET["id"]);
		extract($u->data);
		
		if (isset($_POST["btSubmit"])) {
			if ($this->validationform($vf)==true) {
				$this->save($_POST);
			}
		}
		require $this->gabarit;
	}
	
	function validationform($vf) {
		$vf->name('user_firstname')->required('Le champ «Prénom» est obligatoire.')->alfa();
		$vf->name('user_lastname')->required('Le champ «Nom» est obligatoire.')->alfa();
		$vf->name('user_email')->required('Le champ «Adresse email» est obligatoire.');
		$vf->name('user_email')->email("L’adresse email est invalide.");
		$vf->name('user_password')->required('Le champ «Mot de passe» est obligatoire.');
		$valid = ($vf->isGroupValid()) ? true : false;
		return $valid;
	}
	

	function save($array) { 
		$u=new User();
		
		$array["user_createdat"]=date("Y-m-d H:i:s");
		$array["user_password"]=password_hash($_POST["user_password"], PASSWORD_DEFAULT);
		$u->chargerDepuisTableau($array);
		$u->sauver();
		header("location:index.php?m=member&a=showprofil");
	}
	
	//param GET id 
	function a_deletehisaccount() {
		if (isset($_GET["id"])) {
			Contact::deleteContactsOfUser($_GET["id"]);
			User::delete("user","user_id",$_GET["id"]);
		}
		header("location:index.php?m=authentification&a=index");
	}
	
	function a_indexcontact() {
		$contacts=Contact::requestToListContactsOfOneUser($_SESSION['user_id']);
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_editcontact() {
		include 'validFluent.php';
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$vf = new ValidFluent($_POST);
		$u=new Contact($id);
		extract($u->data);
		if (isset($_POST["btSubmit"])) {
			extract($_POST);
			if ($this->validationformcontact($vf)==true)
				$this->contactsave($_POST);
		}
		require $this->gabarit;
	}
	
	function validationformcontact($vf) {
		$vf->name('contact_firstname')->required('Le champ «Prénom» est obligatoire.')->alfa();
		$vf->name('contact_lastname')->required('Le champ «Nom» est obligatoire.')->alfa();
		$vf->name('contact_email')->email("L’adresse email est invalide.");
		$vf->name('contact_telephone')->phone("Le numéro de téléphone est invalide.");
		$vf->name('contact_mobile')->phone("Le numéro de mobile est invalide.");
		$valid = ($vf->isGroupValid()) ? true : false;
		return $valid;
	}
	
	//$_POST : enregistrement à sauver
	function contactsave($array) {
		$u=new Contact();
		if ($array["contact_createdat"]=="")
			$array["contact_createdat"]=date("Y-m-d H:i:s");
		
		$array["contact_user"]=$_SESSION["user_id"];
		$u->chargerDepuisTableau($array);
		$u->sauver();
		header("location:index.php?m=member&a=indexcontact");
	}
	
	function a_showcontact() {
		$u=new Contact($_GET["id"]);
		extract($u->data);
		require $this->gabarit;
	}
	
	
	//param GET id 
	function a_deletecontact() {
		if (isset($_GET["id"])) {
			Contact::delete("contact","contact_id",$_GET["id"]);
		}
		header("location:index.php?m=member&a=indexcontact");
	}

}
?>