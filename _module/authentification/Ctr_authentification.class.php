<?php
class Ctr_authentification extends Ctr_controleur {
	public function __construct($action) {
        parent::__construct("authentification", $action,"modele_authentification.php");        
        $a = "a_$action";
        $this->$a();
    }
	
	function a_index() {
		//traitement du formulaire
		if (isset($_POST["btSubmit"])) {
			extract($_POST);
			if ( $row=User::verification($user_email) ) {
				if (password_verify($_POST['user_password'],  $row["user_password"])) {
					$_SESSION["user_id"]=$row["user_id"];
					$_SESSION["user_email"]=$row["user_email"];
					$_SESSION["user_role"]=$row["user_role"];
					header("location:" . hlien("accueil","index"));
				} 
				else
					header("location:" . hlien("authentification","index","para",1));
			} 
			else
				header("location:" . hlien("authentification","index","para",1));		
		}
		else 
			require $this->gabarit;		
	}
	
	function a_deconnexion()
	{
		unset($_SESSION["user_id"]);
		session_destroy();
		header("location:" . hlien("authentification","index"));
	}
}

?>