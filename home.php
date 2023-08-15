

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>G-Shop -Explore a wide range of authentic and quality products
  </title>
  <!-- favicon -->
  
  <link rel="shortcut icon" href="./fav.png" type="image/svg+xml">

  <!-- custom css link-->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- swiper-bundle -->
  <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"/>
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

  <!--- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!--HEADER Part-->

  <header class="header">

    <div class="header-top">
      <div class="container">

        <!-- <div class="countdown-text">
          Exclusive August flash sell Offer <span class="span skewBg">16</span> Days
        </div> -->
        <div class="countdown-text">
          Exclusive August flash sell Offer <span class="span skewBg" id="countdown"></span>
        </div>
        
        
        <!-- Follow us on -->
        <div class="social-wrapper">

          <p class="social-title">Follow us on :</p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>
            <!-- NavBar part -->
<?php
    include 'navbar.php';
?>

  </header>

  <!---SEARCH BAR-->

  <div class="search-container" data-search-box>

    <div class="input-wrapper">
      <input type="search" name="search" aria-label="search" placeholder="Search here..." class="search-field">

      <button class="search-submit" aria-label="submit search" data-search-toggler>
        <ion-icon name="search-outline"></ion-icon>
      </button>

      <button class="search-close" aria-label="close search" data-search-toggler></button>
    </div>

  </div>
 <!---HERO PART-->
  <main>
    <article>

     

      <section class="section hero" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">SURVIVAL ARENA</p>

            <h1 class="h1 hero-title">
              PREVAIL AGAINST ALL<span class="span">ODDS IN !</span> SURVIVAL ARENA
            </h1>

            <p class="hero-text">
              Build towers, formulate a strategy, ward off your enemies, and most importantly — survive!
            </p>

            <button class="btn skewBg">Read More</button>

          </div>

          <figure class="hero-banner img-holder" style="--width: 700; --height: 700;">
            <img src="./assets/images/hero-banner.png" width="700" height="700" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>
      <!--BRAND PART-->

      <section class="section brand" aria-label="brand">
        <div class="container">

          <ul class="has-scrollbar">

            <li class="brand-item">
              <img src="./assets/images/brand-1.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-2.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-3.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-4.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-5.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-6.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

          </ul>

        </div>
      </section>

      <!-- <div class="section-wrapper">

        
          - #LATEST GAME
       

        <section class="section latest-game" aria-label="latest game">
          <div class="container">

            <p class="section-subtitle">Latest Releases</p>

            <h2 class="h2 section-title">
              Create & <span class="span">Manage</span>
            </h2>

            <ul class="has-scrollbar">

              <li class="scrollbar-item">
                <div class="latest-game-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="./assets/images/latest-game-1.jpg" width="400" height="470" loading="lazy"
                      alt="White Walker Daily" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Zombie</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">White Walker <span class="span">Daily</span></a>
                    </h3>

                    <p class="card-price">
                      Entry Fee : <span class="span">Free</span>
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="latest-game-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="./assets/images/latest-game-2.jpg" width="400" height="470" loading="lazy"
                      alt="Hunter Killer II" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Adventure</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">Hunter Killer <span class="span">II</span></a>
                    </h3>

                    <p class="card-price">
                      Entry Fee : <span class="span">$25.00</span>
                    </p>

                  </div>

                </div>
              </li>

              <li class="scrollbar-item">
                <div class="latest-game-card">

                  <figure class="card-banner img-holder" style="--width: 400; --height: 470;">
                    <img src="./assets/images/latest-game-3.jpg" width="400" height="470" loading="lazy"
                      alt="Cyberpunk Daily" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <a href="#" class="card-badge skewBg">Action</a>

                    <h3 class="h3">
                      <a href="#" class="card-title">Cyberpunk <span class="span">Daily</span></a>
                    </h3>

                    <p class="card-price">
                      Entry Fee : <span class="span">$25.00</span>
                    </p>

                  </div>

                </div>
              </li>

            </ul>

          </div>
        </section> -->

    <!-- Trending Section -->
    <section class="trending container" id="trending-section">
      <div class="heading">
        <h2>🔥 Trending Games</h2>
      </div>
      <!-- Trending Content -->
      <div class="trending-content swiper">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="./assets/images/tradingPic/trending1.webp" alt="" />
              <div class="box-text">
                <h2>Cyberpunk 2077</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                  </div>
                  <a href="/" class="box-btn"
                    ><i class="bx bx-down-arrow-alt bx-tada"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="./assets/images/tradingPic/trending2.jpg" alt="" />
              <div class="box-text">
                <h2>Battlefield 2042</h2>
                <h3>Action, Weapon, Crime</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                  </div>
                  <a href="/" class="box-btn"
                    ><i class="bx bx-down-arrow-alt bx-tada"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="./assets/images/tradingPic/trending3.jpg" alt="" />
              <div class="box-text">
                <h2>Assassin's Creed</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                  </div>
                  <a href="/" class="box-btn"
                    ><i class="bx bx-down-arrow-alt bx-tada"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 4 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="./assets/images/tradingPic/trending4.jpg" alt="" />
              <div class="box-text">
                <h2>Ghost of Tsushima</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                  </div>
                  <a href="/" class="box-btn"
                    ><i class="bx bx-down-arrow-alt bx-tada"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 5 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="./assets/images/tradingPic/trending5.png" alt="" />
              <div class="box-text">
                <h2>GTA V</h2>
                <h3>Action, Crime, Mission</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                  </div>
                  <a href="/" class="box-btn"
                    ><i class="bx bx-down-arrow-alt bx-tada"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 6 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="./assets/images/tradingPic/trending6.jpg" alt="" />
              <div class="box-text">
                <h2>Dying Light 2</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                  </div>
                  <a href="/" class="box-btn"
                    ><i class="bx bx-down-arrow-alt bx-tada"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 7 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="./assets/images/tradingPic/trending7.png" alt="" />
              <div class="box-text">
                <h2>HALO infinite</h2>
                <h3>Action</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                  </div>
                  <a href="/" class="box-btn"
                    ><i class="bx bx-down-arrow-alt bx-tada"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 8 -->
          <div class="swiper-slide">
            <div class="box">
              <img src="./assets/images/tradingPic/trending8.png" alt="" />
              <div class="box-text">
                <h2>Resident Evil Village</h2>
                <h3>Action, Crime</h3>
                <div class="rating-download">
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <span>4.7</span>
                  </div>
                  <a href="/" class="box-btn"
                    ><i class="bx bx-down-arrow-alt bx-tada"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


   <br>
        <!---LIVE MATCH-->

        <section class="section live-match" id="live" aria-label="live match">
          <div class="container">

            <h2 class="h2 section-title">
              Watch Live <span class="span">Match</span>
            </h2>

            <!-- <figure class="live-match-banner img-holder" style="--width: 800; --height: 470;">

              <img src="./assets/images/live-match-banner.jpg" width="800" height="470" loading="lazy"
                alt="Live Match Video" class="img-cover">

              <button class="play-btn" aria-label="play video">
                <ion-icon name="play"></ion-icon>
              </button> -->
              <figure class="live-match-banner img-holder" style="--width: 800; --height: 470;">
                <img src="./assets/images/live-match-banner.jpg" width="800" height="470" loading="lazy"
                  alt="Live Match Video" class="img-cover">
                  
                <a href="https://www.youtube.com/watch?v=lF-vvJhK_Cc&ab_channel=AmnBeniwal" target="_blank" rel="noopener noreferrer">
                  <button class="play-btn" aria-label="play video">
                    <ion-icon name="play"></ion-icon>
                  </button>
                </a>
              </figure>

            <!-- </figure> -->

            <div class="live-match-player">

              <figure class="player player-1 img-holder" style="--width: 406; --height: 277;">
                <img src="./assets/images/live-match-player-1.png" width="406" height="277" loading="lazy"
                  alt="tokyo eagle" class="w-100">
              </figure>

              <div class="live-match-detail">

                <p class="live-match-subtitle">Upcoming Live Matches</p>

                <time class="live-match-time" datetime="08:30">08:30</time>

              </div>

              <figure class="player player-2 img-holder" style="--width: 400; --height: 305;">
                <img src="./assets/images/live-match-player-2.png" width="400" height="305" loading="lazy"
                  alt="new york hunter7" class="w-100">
              </figure>

            </div>

          </div>
        </section>

      </div>
      <!---FEATURED GAME-->

      <section class="section featured-game" id="features" aria-label="featured game">
        <div class="container">

          <h2 class="h2 section-title">
            All Released <span class="span">Games</span>
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-1.jpg" width="450" height="600" loading="lazy"
                    alt="Just for Gamers" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Just for <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Just for <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-2.jpg" width="450" height="600" loading="lazy"
                    alt="Need for Speed" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Need for <span class="span">Speed</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Need for <span class="span">Speed</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-3.jpg" width="450" height="600" loading="lazy"
                    alt="Egypt Hunting Gamers" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Egypt Hunting <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Egypt Hunting <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-4.jpg" width="450" height="600" loading="lazy"
                    alt="Just for Gamers" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Just for <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Just for <span class="span">Gamers</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Playstation 5, Xbox</span>
                  </span>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!--GAMING PRODUCT CORNER-->

      <section class="section shop" id="shop" aria-label="shop"
        style="background-image: url('./assets/images/shop-bg.jpg')">
        <div class="container">

          <h2 class="h2 section-title">
            Gaming Product <span class="span">Corner</span>
          </h2>

          <p class="section-text">
            Price and other details may vary based on product size and color.
          </p>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="./assets/images/shop-img-1.jpg" width="300" height="260" loading="lazy"
                    alt=" Black T-Shirt" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">t-shirt</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Black T-Shirt</a>
                  </h3>

                  <div class="card-wrapper">
                    <p class="card-price">$29.00</p>

                    <button class="card-btn">
                      <ion-icon name="basket"></ion-icon>
                    </button>
                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="./assets/images/shop-img-2.jpg" width="300" height="260" loading="lazy"
                    alt="Gears 5 Xbox Controller" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">x-box</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Gears 5 Xbox Controller</a>
                  </h3>

                  <div class="card-wrapper">
                    <p class="card-price">$29.00</p>

                    <button class="card-btn">
                      <ion-icon name="basket"></ion-icon>
                    </button>
                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="./assets/images/shop-img-3.jpg" width="300" height="260" loading="lazy"
                    alt="GeForce RTX 2070" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">Graphics</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">GeForce RTX 2070</a>
                  </h3>

                  <div class="card-wrapper">
                    <p class="card-price">$29.00</p>

                    <button class="card-btn">
                      <ion-icon name="basket"></ion-icon>
                    </button>
                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="./assets/images/shop-img-4.jpg" width="300" height="260" loading="lazy"
                    alt="Virtual Reality Smiled" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">VR-Box</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Virtual Reality Smiled</a>
                  </h3>

                  <div class="card-wrapper">
                    <p class="card-price">$29.00</p>

                    <button class="card-btn">
                      <ion-icon name="basket"></ion-icon>
                    </button>
                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!--LATEST NEWS & ARTICLES-->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <h2 class="h2 section-title">
            Latest News & <span class="span">Articles</span>
          </h2>

          <p class="section-text">
            The biggest video game news, rumors, previews, and info about the PC, PlayStation, Xbox, Nintendo, & mobile titles you play.
          </p>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="./assets/images/epic-games-store-logo-with-gold-background.jpg" width="400" height="290" loading="lazy"
                    alt="Shooter Action Video" class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2023-09-10" class="item-text">September 10, 2023</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">Epic Games Store Reveals Two Free Games for August 17</a>
                  </h3>

                  <p class="card-text">
                    The Epic Games Store has confirmed that users will be able to claim Black Book and Dodo Peak for free beginning on August 17. For today, Bloons TD 6 and Loop Hero are rotating out of EGS for Europa Universalis 4 and Orwell: Keeping an Eye on You, which will be available until August 17 at 10 am CT. 
                  </p>

                  <a href="#" class="card-link">
                    <span class="span">Read More</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="./assets/images/fontaine.jpg" width="400" height="290" loading="lazy" alt="The Walking Dead"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">September 12, 2023</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title">Genshin Impact Leak Reveals New Fontaine Character</a>
                  </h3>

                  <p class="card-text">
                    A recent Genshin Impact leak has revealed that there is a brand-new playable unit named Emilie, who is expected to make her debut in version 4.0 or 4.1. Up until this leak, there have only been some rumors about the existence of Emilie, but her identity, design have remained a mystery.
                  </p>

                  <a href="https://gamerant.com/genshin-impact-leak-emilie-fontaine-character/" class="card-link">
                    <span class="span">Read More</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 400; --height: 290;">
                  <img src="./assets/images/GTA-6-Leak.jpg" width="400" height="290" loading="lazy"
                    alt="" class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="person-outline"></ion-icon>

                      <a href="#" class="item-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline"></ion-icon>

                      <time datetime="2022-09-19" class="item-text">September 19, 2022</time>
                    </li>

                  </ul>

                  <h3>
                    <a href="#" class="card-title"> GTA 6 release date, gaming fans will have to wait for a year
                    </a>
                  </h3>

                  <p class="card-text">
                    This possible GTA 6 release window is based on several recent insider reports, as well as Take-Two’s own financial forecasts which repeatedly indicated that the company is expecting a huge revenue increase during its upcoming fiscal year.
                  </p>

                  <a href="https://www.hindustantimes.com/technology/big-update-on-gta-6-release-date-gaming-fans-will-have-to-wait-for-a-year-101691559271677.html" class="card-link">
                    <span class="span">Read More</span>

                    <ion-icon name="caret-forward"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!--NEWSLETTER-->

      <section class="newsletter" aria-label="newsletter">
        <div class="container">

          <div class="newsletter-card">

            <h2 class="h2">
              Our <span class="span">Newsletter</span>
            </h2>

            <form action="" class="newsletter-form">

              <div class="input-wrapper skewBg">
                <input type="email" name="email_address" aria-label="email" placeholder="Enter your email..." required
                  class="email-field">

                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <button type="submit" class="btn newsletter-btn skewBg">
                <span class="span">Subscribe</span>

                <ion-icon name="paper-plane" aria-hidden="true"></ion-icon>
              </button>

            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!--FOOTER-->

<?php
include "footer.php";
?>





  <!--BACK TO TOP-->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up"></ion-icon>
  </a>





  <!--custom js link
  -->
  <script src="./assets/js/script.js" defer></script>
  <script src="./assets/js/swiper-bundle.min.js"></script>
  <!-- <script src="./assets/js/tradingScript.js"></script> -->

  <!-- 
    -link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="swiper-bundle.min.js"></script>
  
  <!-- <script src="script.js"></script> -->
  <script src="./assets/js/scriptTD.js"></script>
  <script src="./countDown.js"></script>

</body>

</html>