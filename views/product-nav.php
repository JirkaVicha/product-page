<!--Home Product NavBar
Include this file into home.php to reach
buttons for add-product.php and deleting-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
  <a class="navbar-brand" href="index.php">Product List</a>
    <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#collapseNavbar" 
            aria-controls="collapseNavbar" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>          
    </button>
  <div class="collapse navbar-collapse" id="collapseNavbar">
    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a href="add-product.php" class="btn btn-success btn-sm">ADD</a>
      </li>
      <li class="nav-item">
        <form method="post" id="delete_form">
          <button type="submit" 
                name="delete-product-btn" 
                id="delete-product-btn" 
                class="btn btn-secondary btn-sm ms-3">MASS DELETE</button>
        </form>
      </li> 
    </ul>
  </div>
</nav>
</div> 
