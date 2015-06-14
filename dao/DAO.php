<?php
class DAO {
	private static $dbHost = "localhost";
	private static $dbName = "BADGES_2015";
	private static $dbUser = "root";
	private static $dbPass = "root";
	private static $sharedPDO;
/*
	private static $dbHost = "mysqlstudent";
	private static $dbName = "renaatstuiii3ieh";
	private static $dbUser = "renaatstuiii3ieh";
	private static $dbPass = "Ohs4QuaeQuee";
	private static $sharedPDO;
	*/
	
	protected $pdo;

	function __construct() {
		if(empty(self::$sharedPDO)) {
			self::$sharedPDO = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPass);
			self::$sharedPDO->exec("SET CHARACTER SET utf8");
			self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}
		$this->pdo =& self::$sharedPDO;
	}
}