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
    <link rel="stylesheet" href="tes.css" />
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
          <li class="nav-item"><a class="nav-link" href="shop.html">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>

        <!-- Login dan Cart -->
        <div class="d-flex align-items-center">
          <!-- Icon User login -->
          <i class="bi bi-person me-2"></i>
          <a href="login.html" class="me-4">Log In</a>

          <!-- Icon keranjang -->
          <a href="my-cart.html">
            <i class="bi bi-bag"></i>
          </a>
        </div>
      </div>
    </nav>

    <!-- Banner -->
    <div class="banner-container">
      <img
        src="{{ asset('images/SPA natural cosmetic on marble.jpeg') }}"
        class="banner-img"
        alt="Banner Image"
      />
      <div class="banner-text">
        <p>TEMUKAN KEINDAHANMU YANG SESUNGGUHNYA</p>
        <h1>“We Repair Your Skin Barrier”</h1>
        <a href="#" class="shop-now-btn">SHOP NOW ></a>
      </div>
    </div>

    <!-- New Arrivals Section -->
    <section class="new-arrivals py-5">
      <div class="container">
        <h2 class="text-center mb-5">New Arrivals</h2>

        <div
          id="newArrivalsCarousel"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <!-- First slide (3 images) -->
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <img
                      src="{{ asset ('images/SKINTIFIC 5X Ceramide Soothing Toner 80ml.jpg') }}"
                      class="card-img-top"
                      alt="Product 1"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Product 1</h5>
                      <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img
                      src="{{ asset('images/Serum Saliclyic.jpg') }}"
                      class="card-img-top"
                      alt="Product 2"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Product 2</h5>
                      <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img
                      src="{{ asset('images/serum1.jpg') }}"
                      class="card-img-top"
                      alt="Product 3"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Product 3</h5>
                      <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Second slide (3 images) -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <img
                      src="{{ asset ('images/facemask1.jpg') }}"
                      class="card-img-top"
                      alt="Product 4"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Product 4</h5>
                      <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img
                      src="{{ asset ('images/sunscreen1.jpg') }}"
                      class="card-img-top"
                      alt="Product 5"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Product 5</h5>
                      <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img
                      src="{{ asset('images/Mugwort Clay Stick.jpeg') }}"
                      class="card-img-top"
                      alt="Product 6"
                    />
                    <div class="card-body text-center">
                      <h5 class="card-title">Product 6</h5>
                      <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Carousel Controls -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#newArrivalsCarousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#newArrivalsCarousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!-- Import Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  
