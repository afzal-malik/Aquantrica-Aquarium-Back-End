<nav class="container navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <img src="images/logo1.png" class="img img-fluid" style="height:40px;" alt="logo">
    <a class="navbar-brand" href="#">Aquatrinica</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false"
        aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">Dashboard
            <span class="visually-hidden">(current)</span>
          </a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="add_product_1.php">Create New Product</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="search_product_1.php">Read / Search Product </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="edit_product_1.php">Update Product</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="delete_product_1.php">Delete Product</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Accessories</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="add_accessories_1.php">Create New Accessory</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="search_accessories_1.php">Read / Search Accessory </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="edit_accessories_1.php">Update Accessory</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="delete_accessories_1.php">Delete Accessory</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="add_service_1.php">Create New Services</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="search_service_1.php">Read / Search Services</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="edit_service_1.php">Update Services</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="delete_service_1.php">Delete Services</a>
          </div>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
