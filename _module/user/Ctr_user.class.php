<?php

class Ctr_user extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("user", $action);
        $this->table="user";
        $this->classTable = "User";
        $this->cle = "use_id";
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
			$u=new User();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=user");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			User::supprimer("user","use_id",$_GET["id"]);
		}
		header("location:index.php?m=user");
	}
}

?>