<?php
class Ctr_authentification extends Ctr_controleur {
	public function __construct($action) {
        parent::__construct("authentification", $action,"modele_authentification.php");        
        $a = "a_$action";
        $this->$a();
    }
	
	function a_index()
	{		
		//traitement du formulaire
		if (isset($_POST["btSubmit"]))
		{
			extract($_POST);
			if ( $row=Utilisateur::verification($uti_login,$uti_mdp) ) {		
				$_SESSION["uti_id"]=$row["uti_id"];
				$_SESSION["uti_login"]=$row["uti_login"];
				$_SESSION["uti_profil"]=$row["uti_profil"];
				header("location:" . hlien("accueil","index"));
			} 
			else
				header("location:" . hlien("authentification","index","para",1));		
		}
		else 
			require $this->gabarit;		
	}
	
	function a_deconnexion()
	{
		unset($_SESSION["uti_id"]);
		session_destroy();
		header("location:" . hlien("authentification","index"));
	}
}

?>