<?php
class Contact extends Entity {
	public function __construct($id=0) {
		parent::__construct("contact", "con_id",$id);
	}
}
?>
