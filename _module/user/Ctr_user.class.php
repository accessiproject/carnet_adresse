<?php

class Ctr_user extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("user", $action);
        $this->table="user";
        $this->classTable = "User";
        $this->cle = "user_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_userindex() {
		$result=User::selectAll("user");
		require $this->gabarit;
	}

	//$_GET["id"] : id de l'enregistrement
	function a_useredit() {
		include 'validFluent.php';
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$vf = new ValidFluent($_POST);
		$u=new User($id);
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
		header("location:index.php?m=user&a=userindex");
	}

	//param GET id 
	function a_userdelete() {
		if (isset($_GET["id"])) {
			Contact::deleteContactsOfUser($_GET["id"]);
			User::delete("user","user_id",$_GET["id"]);
		}
		header("location:index.php?m=user&a=userindex");
	}
}

?>