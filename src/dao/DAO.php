<?php

class DAO {

  // Properties
	private static $sharedPDO;
	protected $pdo;

  // Constructor
	function __construct() {

		if(empty(self::$sharedPDO)) {

      $dbHost = getenv('PHP_DB_HOST') ?: "ID338783_makersfaire.db.webhosting.be";
      $dbName = getenv('PHP_DB_DATABASE') ?: "ID338783_makersfaire";
      $dbUser = getenv('PHP_DB_USERNAME') ?: "ID338783_makersfaire";
      $dbPass = getenv('PHP_DB_PASSWORD') ?: "makers123";

			self::$sharedPDO = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPass);
			self::$sharedPDO->exec("SET CHARACTER SET utf8");
			self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}

		$this->pdo =& self::$sharedPDO;

	}

  // Methods

}

 ?>
