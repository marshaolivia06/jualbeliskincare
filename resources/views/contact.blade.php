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
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
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
    <link rel="stylesheet" href="\PBL_OKE\assets\css\contact.css" />
    <title>Contact | PureBeauty</title>
  </head>
  <body>
    <!-- Nama toko -->
    <div class="top-bar d-flex justify-content-between align-items-center p-3">
      <h2 class="site-name">PureBeauty</h2>
      <h3 class="tagline text-center mx-auto"><br />Skin Protection</h3>
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
        <img
          alt="contact.jpg"
          class="w-90 h-auto"
          src="{{ asset('images/contact.jpg') }}"
          style="margin-left: 70px; max-width: 550px"
        />
      </div>
      <div class="w-1/2 p-3" style="margin-right: 70px; margin-left: 80px">
        <h2 class="text-2xl font-bold mb-4">CONTACT US</h2>
        <p>We are here to help you!</p>
        <p class="mb-4">
          Feel free to contact us through the following information:
        </p>
        <p class="font-bold">Email: purebeautysofficial@gmail.com</p>
        <p class="font-bold">Instagram: @purebeautys_id</p>
        <p class="font-bold">Twitter: @purebeautyid</p>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  <br />
  <br />
  