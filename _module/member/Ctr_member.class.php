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
		$u=new User($_SESSION['user_id']);
		extract($u->data);
		$json=json_encode($u->data);
		require $this->gabarit;
	}
	
	function a_showcontacts() {
		$u=new User($_SESSION['user_id']);
		extract($u->data);
		$json=json_encode($u->data);
		require $this->gabarit;
	}
	
}
?>