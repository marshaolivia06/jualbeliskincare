<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Belleza&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>HOME | Makeup-store</title>
  </head>
  <body>
    <!-- Nama toko -->
    <div class="top-bar d-flex justify-content-between align-items-center p-3">
      <h2 class="site-name">PureBeauty</h2>
      <h3 class="tagline text-center mx-auto">Skin Protection</h3>
    </div>

    <!-- Navbar -->
    <nav class="navbar p-1">
      <div
        class="container-fluid d-flex justify-content-between align-items-center flex-wrap"
      >
        <!-- Search bar -->
        <div class="d-flex align-items-center flex-grow-1 flex-md-grow-0">
          <i class="bi bi-search"></i>
          <input
            class="form-control me-2 border-0"
            type="search"
            placeholder="Search..."
            aria-label="Search"
          />
        </div>

        <!-- Navigasi -->
        <ul class="nav mx-auto">
          <li class="nav-item"><a class="nav-link" href="tes.html">Home</a></li>
          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>

        <!-- Login dan Cart -->
        <div class="d-flex align-items-center">
          <!-- Icon User login -->
          <a href="login.html" class="me-4">
            <i class="bi bi-person me-2"></i>
          </a>

          <!-- Icon keranjang -->
          <a href="my-cart.html">
            <i class="bi bi-bag"></i>
          </a>
        </div>
      </div>
    </nav>

    <!-- Browse by and Product Grid -->
    <div class="shop-container d-flex">
      <!-- Sidebar Kategori -->
      <div class="sidebar">
        <h4>Browse by</h4>
        <ul>
          <li><a href="#">All Products</a></li>
          <li><a href="#">Face Mask</a></li>
          <li><a href="#">Moisturizer</a></li>
          <li><a href="#">Serum</a></li>
          <li><a href="#">Sunscreen</a></li>
        </ul>
      </div>

      <!-- Grid Produk -->
      <div class="product-grid">
        <!-- Produk 1 -->
        <div class="product-item">
          <a href="det_pro.html">
            <img src="{{ asset('images/facemask1.jpg') }}" alt="facemask1" />
          </a>
          <div class="product-rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
          </div>
          <span class="badge bg-danger">Diskon 20%</span>
          <h5>ALASKA VOLCANO CLAY</h5>
          <p>Pore Detox Clay Stick</p>
          <p>Rp139.000,00</p>
          <div class="quantity-control d-flex align-items-center">
            <button class="btn btn-quantity">-</button>
            <span class="quantity mx-2">1</span>
            <button class="btn btn-quantity">+</button>
          </div>
          <button class="btn btn-add-to-cart mt-2">Add to Cart</button>
        </div>

        <!-- Produk 2 -->
        <div class="product-item">
          <a href="product-detail.html?product=2">
            <img
              src="{{ asset('images/SKINTIFIC 5X Ceramide Soothing Toner 80ml.jpg') }}"
              alt="SKINTIFIC 5X Ceramide Soothing Toner 80ml.jpg"
            />
          </a>
          <h5>5x CERAMIDE</h5>
          <p>Barrier Repair Moisturize Gel</p>
          <p>Rp129.600,00</p>
          <div class="quantity-control d-flex align-items-center">
            <button class="btn btn-quantity">-</button>
            <span class="quantity mx-2">1</span>
            <button class="btn btn-quantity">+</button>
          </div>
          <button class="btn btn-add-to-cart mt-2">Add to Cart</button>
        </div>

        <div class="product-item">
          <a href="product-detail.html?product=2">
            <img src="{{ asset('images/sunscreen1.jpg') }}" alt="sunscreen1.jpg" />
          </a>
          <h5>SKINTIFIC AQUA LIGHT </h5>
          <p>SPF 35 PA+++++</p>
          <p>Rp150.600,00</p>
          <div class="quantity-control d-flex align-items-center">
            <button class="btn btn-quantity">-</button>
            <span class="quantity mx-2">1</span>
            <button class="btn btn-quantity">+</button>
          </div>
          <button class="btn btn-add-to-cart mt-2">Add to Cart</button>
        </div>

        