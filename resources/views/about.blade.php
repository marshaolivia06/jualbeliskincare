<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
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
    <link rel="stylesheet" href="\PBL_OKE\assets\css\about.css" />
  <title>About | PureBeauty</title>
</head>
<body>
  <!-- Nama toko -->
    <div class="top-bar d-flex justify-content-between align-items-center p-3">
      <h2 class="site-name">PureBeauty</h2>
      <h3 class="tagline text-center mx-auto"><br>Skin Protection</h3>
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
          <li class="nav-item"><a class="nav-link" href="\PBL_OKE\pages\home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="\PBL_OKE\pages\shopp.php">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        </ul>

        <!-- Login dan Cart -->
        <div class="d-flex align-items-center">
          <!-- Icon User login -->
          <a href="profile.html" class="me-4">
            <i class="bi bi-person me-2"></i>
          </a>

          <!-- Icon keranjang -->
          <a href="cart.html">
            <i class="bi bi-bag"></i>
          </a>
        </div>
      </div>
    </nav>
     <!-- Main Content -->
     <main class="w-full max-w-7xl mt-7 flex">
      <div class="w-1/2">
       <img alt="about" class="w-90 h-auto" src="{{ asset('images/about.jpg') }}" style="margin-left: 60px; max-width: 550px;"/>
      </div>
      <div class="w-1/2 p-2">
          <div class="welcome-text text-justify">
              <p class="text-center text-sm"> Welcome to Pure Beauty, your go-to destination for high-quality skincare products. Our goal is to help you achieve healthy, radiant skin with formulas that are safe, effective, and made from natural ingredients. </p>
              </p>
              <p class="mb-4 text-lg leading-relaxed">
                  <p class="text-center text-sm"> Founded in 2024, PureBeauty was created out of a love for skincare and a desire to provide products that really work. We carefully select ingredients that are gentle yet powerful, suitable for all skin types. </p>
              </p>
              <p class="mb-4 text-lg leading-relaxed">
                  <p class="text-center text-sm"> We prioritize nature's best, using clean and safe ingredients. Every product is developed with the help of skincare professionals to ensure results. We care about the environment, using sustainable practices and packaging. </p>
              </p>
              <p class="mb-4 text-lg leading-relaxed">
                  <p class="text-center text-sm"> At PureBeauty, we believe everyone deserves to feel confident in their skin. Our mission is to make skincare simple, effective, and accessible for all.</p>
              </p>
          </div>
      </div>
   </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<br>
<br>
