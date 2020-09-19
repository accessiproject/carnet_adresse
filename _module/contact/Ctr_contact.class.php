<?php

class Ctr_contact extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("contact", $action);
        $this->table="contact";
        $this->classTable = "Contact";
        $this->cle = "con_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Contact::selectAll("contact");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Contact($id);
		extract($u->data);	
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$u=new Contact();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=contact");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Contact::supprimer("contact","con_id",$_GET["id"]);
		}
		header("location:index.php?m=contact");
	}
}

?>