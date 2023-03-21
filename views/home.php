<?php
$title = 'Product List';

include 'layout.php';
include 'product-nav.php';
include '../model/Product.php';

$product = new Product();
$product->deleteProduct();
$products = $product->getProduct();

foreach ($products as $product): ?>
  
<div class="card" style="width: 20rem;">
  <div class="card-body">
    
  <!--Checkbox on the left side of the card-->
    <div class="form-check">
     <input class="form-check-input delete-checkbox" form='delete_form'
      name="delete_form[]" type="checkbox" 
      value="<?= $product['product_id']; ?>" 
      id="delete_form"> 
    </div>
  
  <div class="text-center">
  <h5 class="card-title"><?= $product['sku'];?></h5>
  <h6 class="card-subtitle mb-2 text-muted"><?= $product['name'];?></h6>
  <p class="card-text"><?= $product['price'];?> $</p>
            
  <?php if (!empty($product['size'])) { ?> 
  <h6 class="card-subtitle mb-2 text-muted"><?= $product['size'];?> MB <?php }?></h6>

  <?php if (!empty($product['weight'])) { ?> 
  <h6 class="card-subtitle mb-2 text-muted"><?= $product['weight'];?> Kg <?php }?></h6>

  <?php if (!empty($product['height']) || (!empty($product['width']) || (!empty($product['length'])))) { ?> 
  <h6 class="card-subtitle mb-2 text-muted">Dimensions: 
  <?= $product['height'];?> x <?= $product['width'];?> x
  <?= $product['length'];?> Cm<?php }?></h6>

       <!--  <input class="form-check-input delete-checkbox" form='delete_form' name="delete_form[]" type="checkbox" value="<?= $product['product_id']; ?>" id="delete_form">
      <label class="form-check-label text-muted" for="defaultCheck1">Select</label> -->
  </div>
  </div>
</div>

<?php endforeach; ?>


