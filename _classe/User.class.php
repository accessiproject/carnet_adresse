<?php
class User extends Entity {
	public function __construct($id=0) {
		parent::__construct("user", "use_id",$id);
	}
}
?>
