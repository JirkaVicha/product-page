<?php

require_once 'Product.php';

class Furniture extends Product 
{
  protected $db;
  protected $height;
  protected $width;
  protected $length;
  protected $product_id;

  public function getHeight() {
    return $this->height;
  }

  public function setHeight($height) {
    $this->height = $height;
    return $this;
  }

  public function getWidth() {
    return $this->width;
  }

  public function setWidth($width) {
    $this->width = $width;
    return $this;
  }

  public function getLength() {
    return $this->length;
  }

  public function setLength($length) {
    $this->length = $length;
    return $this;
  }

  public function addFurniture() {
    parent::addProduct();
    $product_id = $this->db->insert_id;
    // Save Furniture-specific attributes to the 'furnitures' table
    $stmt = $this->db->prepare("INSERT INTO furnitures (product_id, height, width, length)
            VALUES (?, ?, ?, ?)");
    $stmt->bind_param('id', $this->product_id, $this->height, $this->width, $this->length);
    $stmt->execute();
    $this->db->close();
  }

}