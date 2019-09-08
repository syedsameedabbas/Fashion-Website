<?php 
class connect{
	private static $server;
	private static $user;
	private static $password;
	private static $dbname;

	public static function connection($query){
		self::$server = "localhost";
		self::$user = "root";
		self::$password = "";
		self::$dbname = "boutique";

		$conn = new mysqli(self::$server, self::$user, self::$password, self::$dbname);
		if($res = $conn->query($query)){
			return $res;
		}else{
			echo "Error:". $query. "<br>". $conn->error;
			die();
		}
	}
	public static function connected(){
		self::$server = "localhost";
		self::$user = "root";
		self::$password = "";
		self::$dbname = "boutique";

		$conn = new mysqli(self::$server, self::$user, self::$password, self::$dbname);
		return $conn;
	}


	public static function debug($array){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}

}

?>