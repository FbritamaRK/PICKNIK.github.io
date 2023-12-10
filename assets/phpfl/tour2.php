<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUR</title>

    <!-- 
    - custom css link
  -->
  <link rel="stylesheet" type="text/css" href="../css/tour.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">

</head>

<body id="top">

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <div class="header-btn-group">
          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>
        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="index.php" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="#package" class="navbar-link" data-nav-link>packages</a>
            </li>

            <li>
              <a href="../phpfl/pmsn.php" class="navbar-link" data-nav-link>History</a>
            </li>

          </ul>

        </nav>
      </div>
    </div>

  </header>

  <main>
    <article>
      <!-- 
        - #HERO
      -->
      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Explore INDONESIA</h2>

          <p class="hero-text">
            Jelajahi panorama keindahan alam yang ada di Indonesia
          </p>

          <div class="btn-group">
            <button class="btn btn-secondary"><a href="#package">Explore</a></button>
          </div>

        </div>
      </section>
    </article>
  </main>

   <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Paket wisata</p>

          <h2 class="h2 section-title">paket wisata</h2>

          <p class="section-text">
            Nikmati keindahan alam Indonesia dengan memesan paket wisata yang tersedia
          </p>

          <ul class="package-list">

            <!-- Content 1 -->
            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="https://4.bp.blogspot.com/-l65mzz1V5Ho/UwOlBrRWoKI/AAAAAAAAALE/OqNeAnM289I/s1600/Indonesia-North-Sulawesi-Bunaken-Manado-Tua-Reef-011-1200x800.jpg" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">TAMAN NASIONAL BUNAKEN</h3>

                  <p class="card-text">
                  Pulau Bunaken memiliki keindahan berupa taman laut dengan beragam jenis ikan hias dan kawasan pantainya  berupa hamparan pasir putih.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 4</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Manado</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp. 20.000.000
                    <span>4 orang</span>
                  </p>

                  <button class="btn btn-secondary" >
                    <a href="tiket.php">Book Now</a> 
                   </button>

                </div>

              </div>
            </li>

            <!-- Content 2 -->
            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="https://www.villa-finder.com/magazine/wp-content/uploads/2019/11/Resort-Page-Gili-Trawangan-1200x800.jpg"  loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Gili Trawangan</h3>

                  <p class="card-text">
                    Gili Trawangan Lombok dengan pantainya yang indah, lautnya yang biru jernih, pasir pantai yang bersih hingga sunset dan sunrisenya yang mempesona.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">5D/4N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">3</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Lombok</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(15 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp. 15.000.000
                    <span>3 Orang</span>
                  </p>

                  <button class="btn btn-secondary" >
                    <a href="tiket.php">Book Now</a> 
                   </button>

                </div>

              </div>
            </li>

            <!-- Content 3 -->
            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="https://expatlifeindonesia.com/wp-content/uploads/2020/10/sutirta-budiman-DxmBSgUYKis-unsplash.jpg" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Raja Ampat</h3>

                  <p class="card-text">
                    Terdapat biota laut yang sangat beraneka ragam sehingga menjadikan Pulau Raja Ampat menjadi destinasi wisata yang terkenal.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">6D/5N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">5</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Papua</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp. 27.000.000
                    <span>5 Orang</span>
                  </p>

                  <button class="btn btn-secondary" >
                    <a href="tiket.php">Book Now</a> 
                   </button>

                </div>

              </div>
            </li>

            <!-- Content 4 -->

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="https://www.indonesia-tourism.com/bali/nusa-penida/images/nusa_penida.jpg"  loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">NUSA PENIDA</h3>

                  <p class="card-text">
                    Nusa Penida dengan pantainya yang indah dan pemandangan tebing-tebing batu kapur yang menjulang tinggi di atas laut biru.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">4D/3N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">4</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Bali</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp. 17.000.000
                    <span>4 Orang</span>
                  </p>

                  <button class="btn btn-secondary" >
                    <a href="tiket.php">Book Now</a> 
                   </button>

                </div>

              </div>
            </li>

            <!-- Content 5 -->

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="https://indonesiaflorestour.com/wp-content/uploads/2019/09/ift-header-02.jpg" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">TAMAN NASIONAL PULAU KOMODO</h3>

                  <p class="card-text">
                    Kawasan taman nasional ini begitu lengkap, karena tidak hanya ada hutan, tapi juga pantai. Pengunjung dapat menikmati alam yang masih asri, berupa hutan dengan vegetasinya yang beragam dan pantai dengan hamparan pasir putih. 
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">5</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Nusa Tenggara Timur</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp. 30.000.000
                    <span>5 Orang</span>
                  </p>

                  <button class="btn btn-secondary" >
                    <a href="tiket.php">Book Now</a> 
                   </button>

                </div>

              </div>
            </li>

            <!-- Content 6 -->

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="https://2.bp.blogspot.com/-hq3h5tnBnsQ/WJ3f60NnSxI/AAAAAAAAADw/W7fqn65fIGEpBDHOwhazbQQND5W887GSwCLcB/s1600/bal%2B%25281%2529.jpg"  loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">TAMAN NASIONAL BALURAN</h3>

                  <p class="card-text">
                    Dijuluki sebagai little Africa van Java, Taman Nasional Baluran memiliki 444 jenis tumbuhan asli yang khas, serta terdapat 26 jenis mamalia dan 155 jenis burung.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">5D/4N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">6</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Situbondo</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp. 20.000.000
                    <span>6 Orang</span>
                  </p>

                  <button class="btn btn-secondary" >
                    <a href="tiket.php">Book Now</a> 
                   </button>

                </div>

              </div>
            </li>

            <!-- Content 7 -->

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="https://anekatempatwisata.com/wp-content/uploads/2015/10/Wae-Rebo.jpg" alt="GilTra" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">WAE REBO</h3>

                  <p class="card-text">
                    Wae Rebo adalah desa adat kecil yang berlokasi jauh dari perkotaan. Desa ini terletak sekitar 1.100 mdpl dengan dikelilingi pegunungan dan vegetasi yang indah.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">6</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Nusa Tenggara Timur</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp. 40.000.000
                    <span>6 Orang</span>
                  </p>

                  <button class="btn btn-secondary" >
                    <a href="tiket.php">Book Now</a> 
                   </button>

                </div>

              </div>
            </li>

            <!-- Content 8 -->

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="https://cdn.budgetyourtrip.com/images/photos/headerphotos/large/indonesia_mountbromo.jpg" alt="GilTra" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">TAMAN NASIONAL GUNUNG BROMO</h3>

                  <p class="card-text">
                    Gunung Bromo menyuguhkan pemandangan alam yang menakjubkan dan menjadi magnet bagi para wisatawan. Panorama sekitarnya yang memperlihatkan beberapa puncak bebukitan dan kawah menjadi keindahan alam yang tak akan terlupakan bagi yang melihatnya.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">3D/2N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">3</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Pasuruan</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    Rp. 10.000.000
                    <span>3 Orang</span>
                  </p>

                  <button class="btn btn-secondary" >
                    <a href="tiket.php">Book Now</a> 
                   </button>

                </div>

              </div>
            </li>
          

          </ul>

        </div>
      </section>
    
      <div class="center">
        <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="tour.php">1</a>
        <a href="tour2.php" class="active">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
        </div>
      </div>

  <!-- Footer -->
  <footer>
    <p>Team Mumet @ .com All rights reserved.</p>
  </footer>
  <!-- Footer -->
  
  <!-- 
    - custom js link
  -->
  <script src="../assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>