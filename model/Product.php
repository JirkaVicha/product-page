<?php

include '../config/Dbconfig.php';

class Product 
{
  private $sku;
  private $name;
  private $price;
  private $type;
  protected static $db;
  

  public function __construct()
  {
    self::$db = Database::connect();
  }

  public function getSku()
  {
    return $this->sku;
  }

  public function setSku($sku) {
    $this->sku = $sku;
    return $this;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice($price) {
    $this->price = $price;
    return $this;
  }

  public function setType($type) {
    $this->type = $type;
    return $this;
  }

  public function getProduct() {
    $products = self::$db->query("SELECT p.product_id, p.sku, p.name, p.price, 
      d.size, b.weight, f.height, f.width, f.length 
      FROM products AS p 
      LEFT JOIN dvds AS d ON p.product_id = d.product_id
      LEFT JOIN books AS b ON p.product_id = b.product_id
      LEFT JOIN furnitures AS f ON p.product_id = f.product_id
      ORDER BY product_id ASC");
    return $products;
  }

  public function skuExists() {
    $sql = "SELECT * FROM products WHERE sku = '$this->sku'";
    $result = mysqli_query(self::$db, $sql);
    if (mysqli_num_rows($result) > 0) {
      echo "SKU already exists in database.";
    } else {
      $this->addProduct();
    }
  }

  public function addProduct() {
    // Save product to the 'products' table
    $stmt = self::$db->prepare('INSERT INTO products (sku, name, price, type) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssds', $this->sku, $this->name, $this->price, $this->type);
    $stmt->execute();
    $product_id = self::$db->insert_id;

    // Save product to the appropriate table based on its type
    if ($this->type == "1") {
      $stmt = self::$db->prepare('INSERT INTO dvds (product_id, size) VALUES (?, ?)');
      $stmt->bind_param('id', $product_id, $_POST['size']);
      $stmt->execute();
    } else if ($this->type == "2") {
      $stmt = self::$db->prepare('INSERT INTO books (product_id, weight) VALUES (?, ?)');
      $stmt->bind_param('id', $product_id, $_POST['weight']);
      $stmt->execute();
    } else if ($this->type == "3") {
      $stmt = self::$db->prepare('INSERT INTO furnitures (product_id, height, width, length) VALUES (?, ?, ?, ?)');
      $stmt->bind_param('iddd', $product_id, $_POST['height'], $_POST['width'], $_POST['length']);
      $stmt->execute();
    }
    self::$db->close();
    header("Location: ../views/home.php");
  }

  public function deleteProduct() {
    if (isset($_POST['delete_form'])) {
      $arr = $_POST['delete_form'];
      foreach ($arr as $id) {
        $result = mysqli_query(self::$db, "DELETE FROM products WHERE product_id = " . $id);
      } 
      header("Location: ../views/home.php"); 
    }
  }
}