<?php
class Contact extends Entity {
	public function __construct($id=0) {
		parent::__construct("contact", "contact_id",$id);
	}

	/*
		request to list contacts
	*/
	static function requestToListContacts() {
		$sql="select * from contact,user where contact_user=user_id";
		return self::$link->query($sql);
	}
	
	//list contacts of a user
	static function requestToShowContactsOfOneUser($user_id) {
		$sql="select * from contact where contact_user=$user_id";
		return self::$link->query($sql);
	}
	
	static function requestToCountContactsForOneUser($user_id) {
		$sql="select count(contact_id) numberofcontacts from contact where contact_user=$user_id";
		return self::$link->query($sql);
	}

	//supprimer les contacts d'un utilisateur
	static function deleteContactsOfUser($user_id) {
		$sql="delete from contact where contact_user=$user_id";
		return self::$link->query($sql);
	}

}
?>
