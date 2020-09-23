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

	static function verification($user_email) {
		$sql="select * from user where user_email=?";
		$statement = self::$link->prepare($sql);
		$statement->bindValue(1,$user_email,PDO::PARAM_STR);
		$statement->execute();
		if ($statement->rowCount()==1)
			return $statement->fetch(PDO::FETCH_ASSOC);
		else
			return false;
	}

}
?>