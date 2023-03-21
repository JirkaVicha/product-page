<?php
$title = 'Add Products';

include 'layout.php';
include 'add-product-nav.php';
//include '../controller/controller.php';
?>

<!--FORM-->
    <form id="product_form" class="form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
  
    <div class="row mb-2">
      <label for="sku" class="col-sm-2">SKU:</label>
        <div class="col-sm-4">
          <input id="sku" type="text" class="form-control" name="sku" required>
        </div> 
        <div class="col-sm-5"><?php include '../controller/controller.php'; ?></div> 
    </div>

    <div class="row mb-2">
      <label for="name" class="col-sm-2">Name:</label>
        <div class="col-sm-4">
          <input id="name" type="text" class="form-control" name="name" required>
        </div>
    </div>

    <div class="row mb-2">
      <label for="price" class="col-sm-2">Price ($):</label>
        <div class="col-sm-4">
          <input id="price" type="text" class="form-control" name="price" required>
        </div>
    </div>

    <div class="row mb-2">
      <label for="type-switcher" class="col-sm-2">Type Switcher:</label>
        <div class="col-sm-4">
          <select class="form-select" id="productType" name="type">
            <option selected>Choose...</option>
            <option id="dvd" value="1">DVD</option>
            <option id="book" value="2">Book</option>
            <option id="furniture" value="3">Furniture</option>
          </select>
        </div>
    </div>
    
    <div id="new-field"></div>
    <div id="description"></div>
  </form>
</div>







