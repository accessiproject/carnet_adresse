<?php

class Ctr_contact extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("contact", $action);
        $this->table="contact";
        $this->classTable = "Contact";
        $this->cle = "contact_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_contactindex() {
		$result=Contact::requestToListContacts();
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_contactedit() {
		include 'validFluent.php';
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$vf = new ValidFluent($_POST);
		$u=new Contact($id);
		extract($u->data);
		if (isset($_POST["btSubmit"])) {
			extract($_POST);
			if ($this->validationform($vf)==true)
				$this->contactsave($_POST);
		}
		require $this->gabarit;
	}
	
	function validationform($vf) {
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
		
		$u->chargerDepuisTableau($array);
		$u->sauver();
		header("location:index.php?m=contact&a=contactindex");
	}
	
	function a_contactshow() {
		$u=new Contact($_GET["id"]);
		extract($u->data);
		require $this->gabarit;
	}
	
	
	//param GET id 
	function a_contactdelete() {
		if (isset($_GET["id"])) {
			Contact::delete("contact","contact_id",$_GET["id"]);
		}
		header("location:index.php?m=contact&a=contactindex");
	}
}
?>