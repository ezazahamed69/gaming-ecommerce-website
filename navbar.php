<?php
include 'config.php'; 

// Fetch the count of items in the cart table
$count_query = mysqli_query($conn, "SELECT COUNT(*) as total_items FROM cart");
if ($count_query) {
    $count_result = mysqli_fetch_assoc($count_query);
    $total_items = $count_result['total_items'];
} else {
    $total_items = 0; // Default value if there's an error
}

?>

<div class="header-bottom skewBg" data-header>
      <div class="container">

        <a href="#" class="logo">G-Shop</a>

        <nav class="navbar" data-navbar>
          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="./home.php" class="navbar-link skewBg" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="#live" class="navbar-link skewBg" data-nav-link>Live</a>
            </li>

            <li class="navbar-item">
              <a href="#features" class="navbar-link skewBg" data-nav-link>Features</a>
            </li>

            <li class="navbar-item">
              <a href="./shop.php" class="navbar-link skewBg" data-nav-link>Shop</a>
            </li>

            <li class="navbar-item">
              <a href="#blog" class="navbar-link skewBg" data-nav-link>Blog</a>
            </li>

            <li class="navbar-item">
              <a href="contact.php" class="navbar-link skewBg" data-nav-link>Contact</a>
            </li>
            <li class="navbar-item">
              <a href="./login.php" class="navbar-link skewBg" data-nav-link>Log out</a>
            </li>

          </ul>
        </nav>
        <!-- cart-badge -->
        <div class="header-actions">

        <a href="./cart.php" class="cart-btn" aria-label="cart">
          <ion-icon name="cart"></ion-icon>
          <span class="cart-badge"><?php echo $total_items; ?></span>

          <!-- <button class="search-btn" aria-label="open search" data-search-toggler>
            <ion-icon name="search-outline"></ion-icon>
          </button> -->

          <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
            <ion-icon name="menu-outline" class="menu"></ion-icon>
            <ion-icon name="close-outline" class="close"></ion-icon>
          </button>

        </div>

      </div>
    </div>