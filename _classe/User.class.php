<?php
class User extends Entity {
	public function __construct($id=0) {
		parent::__construct("user", "user_id",$id);
	}

	//show users
	static function requestToShowUsers($param) {
		$sql="select * from user order by $param";
		return self::$link->query($sql);
	}

}
?>