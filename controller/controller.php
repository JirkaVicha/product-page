<?php

include '../model/Product.php';
// include 'Model/Dvd.php';
// include 'Model/Book.php';
// include 'Model/Furniture.php';

if (isset($_POST['submit'])) {
  $product = new Product();
  
  $product->setSku($_POST['sku']);
  $product->setName($_POST['name']);
  $product->setPrice($_POST['price']);
  $product->setType($_POST['type']);

  $product->skuExists();
  //$product->addProduct();  
}


