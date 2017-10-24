<?php
  //Credits: https://github.com/KalobMTaulien/PHP-Login-System/blob/master/inc/classes/DB.php


  // If there is no constant defined called __CONFIG__, do not load this file
  if(!defined('__CONFIG__')) {
  	exit('You do not have a config file');
  }


  class Database {
  	protected static $con;
  	private function __construct() {
  		try {
  			self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost:3306;dbname=mydb', 'root', 'root' );
  			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  			self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
  		} catch (PDOException $e) {
  			echo "Could not connect to database."; exit;
  		}
  	}
  	public static function getConnection() {
  		if (!self::$con) {
  			new Database();
  		}
  		return self::$con;
  	}
  }
?>
