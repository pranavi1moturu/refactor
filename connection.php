<?php
define('DATABASE', 'sm2555');
define('USERNAME', 'sm2555');
define('PASSWORD', 'tzw8bjLL');
define('CONNECTION', 'sql1.njit.edu');
class dbConn{
	protected static $db;
	private function __construct() {
	try{
	self::$db = new PDO( 'mysql:host=' . CONNECTION .';dbname=' . DATABASE, USERNAME, PASSWORD );
        self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $e) {
	echo "Connection Error: " . $e->getMessage();
        }
        }
	public static function getConnection() {
	if (!self::$db) {
	new dbConn();
	}
	return self::$db;
	    }
	    }
?>