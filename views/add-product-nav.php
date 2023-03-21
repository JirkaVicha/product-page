<!--Add Product NavBar
Include this file into add-product.php to reach
buttons for saving and canceling-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
  <a class="navbar-brand" href="views/add-product.php">Add Product</a>
    <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarTogglerDemo02" 
            aria-controls="navbarTogglerDemo02" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>          
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <button type="submit" 
                  form="product_form" 
                  name="submit" 
                  class="btn btn-success btn-sm">Save</button>
        </li>
        <li class="nav-item">
          <a href="home.php" class="btn btn-secondary btn-sm ms-3">Cancel</a>
        </li>
      </ul>
    </div>
</nav>

