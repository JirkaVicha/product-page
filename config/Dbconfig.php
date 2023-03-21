<?php

// Static methods can be accesse without the need of instanciating the class

// This class is making the connection between PHP and Database in MySQL

class Database {
  private static $db_server = 'localhost'; //'id20139670_products';
  private static $username = 'root'; //'id20139670_products';
  private static $password = ''; //"%Lrs@]{/dy6*YQ%I";
  private static $db_name = 'addproductDB'; //'id20139670_addproductdb';

  public static function connect() {
    $db = new mysqli(self::$db_server, self::$username, self::$password, self::$db_name);
    if ($db->connect_error) {
      die('Connection failed: ' . $db->connect_error);
    }
    $db->query("SET NAMES 'utf8'");
    return $db;
  }
}