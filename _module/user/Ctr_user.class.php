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

	function a_index() {
		$result=User::selectAll("user");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new User($id);
		extract($u->data);
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$_POST["user_password"]=password_hash($_POST["user_password"], PASSWORD_DEFAULT);
			$u=new User();
			$_POST["user_createdat"]=date("Y-m-d H:i:s");
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=user");
	}

	//param GET id 
	function a_deleteOneUser() {
		if (isset($_GET["id"])) {
			Contact::deleteContactsOfUser($_GET["id"]);
			User::delete("user","user_id",$_GET["id"]);
		}
		header("location:index.php?m=user");
	}
}

?>