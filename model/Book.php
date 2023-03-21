<?php

require_once 'Product.php';

class Book extends Product 
{
  protected $db;
  protected $weight;
  protected $product_id;

  public function getWeight() {
    return $this->weight;
  }

  public function setWeight($weight) {
    $this->weight = $weight;
    return $this;
  }

  public function addBook() {
    parent::addProduct();
    $product_id = $this->db->insert_id;
    // Save Book-specific attributes to the 'books' table
    $stmt = $this->db->prepare("INSERT INTO books (product_id, weight)
            VALUES (?, ?)");
    $stmt->bind_param('id', $this->product_id, $this->weight);
    $stmt->execute();
    $this->db->close();
  }
}