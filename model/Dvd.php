<?php

require_once 'Product.php';

class Dvd extends Product 
{
  protected $db;
  //private $type;
  protected $size;
  protected $product_id;

  public function __construct() {
    parent::__construct();
    $this->db = parent::$db;
  }

  public function getSize() {
    return $this->size;
  }

  public function setSize($size) {
    $this->size = $size;
    return $this;
  }

  public function addDvd() {
    parent::addProduct();
    $product_id = $this->db->insert_id;
    // Save DVD-specific attributes to the 'dvds' table
    $stmt = $this->db->prepare("INSERT INTO dvds (product_id, size)
            VALUES (?, ?)");
    $stmt->bind_param('id', $product_id, $this->size);
    $stmt->execute();
    $this->db->close();
  } 
}


