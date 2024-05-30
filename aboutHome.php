<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <!-- CSS -->
        <link rel="stylesheet" href="assets\css\styleAbout.css">      
        
                <!-- 
        - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap" rel="stylesheet">

      <!-- 
    - Animation On Scroll
  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    
          <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.html" class="logo">
        <img src="assets\images\logo.png">
      </a>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
        </button>

        <ul class="navbar-list">

          <li>
            <a href="home.php" class="navbar-link " data-nav-link>Home</a>
          </li>

          <li>
            <a href="aboutHome.php" class="navbar-link active" data-nav-link>About Us</a>
          </li>

          <li>
            <a href="programsHome.php" class="navbar-link" data-nav-link>Programs</a>
          </li>
          <li>
            <a href="coaches.php" class="navbar-link active" data-nav-link>Coaches</a>
          </li>
          <li>
            <a href="pricing.php" class="navbar-link " data-nav-link>Pricing</a>
          </li>

          <li>
            <a href="https://www.facebook.com/profile.php?id=61559908066456" class="navbar-link" data-nav-link>Contact Us</a>
          </li>

        </ul>

      </nav>

      <a href="logout.php" class="btn btn-secondary">Logout</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>

    </div>
  </header>

            <!-- 
    - #OUR STORY
  -->
  <section class="hero dark-bg has-after has-bg-image" aria-label="hero" style="background-image: url('./assets/images/hero-bg.png')">
   
    <div class="container">
        <div class="row">
            <div class="our-story-col1 col">
                <h1 class="h1 title-1" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500">Our Story</h1>
                
                <p class="section-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000"> At Gym Buddy, we believe that 	fitness is the foundation of healthy life. Established in 2024, we began our journey as a partnership-owned business by three (3) members dedicated to provide exceptional gym courses at affordable prices. But, we dreamed bigger than just being an ordinary offering gym courses; we aspired to lead the industry.</p>
            </div>
        </div>
    </div>
  </section>

  <section class="values">
    <div class="row">
        <div class="about-one col">
            <h1 class="h1 title-1" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" >Our Values</h1>
           
            <p class="section-text ps-5 pe-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                We live and breathe our five (5) core values and six brand promises — they serve as the backbone of our operations and speak of our commitment to improving the lives of our customers, supporting our team, championing industry standards, and driving our business with integrity and passion.
            </p>
        </div>
    </div>
  </section>

              <!-- 
    - #OUR VALUES
  -->
  <section class="icons">
    <div class="container">
      <div class="row text-center">
          <div class="col-sm-6 col-md-4">
              <div class="inte-col d-flex flex-column align-items-center justify-content-center" data-aos="flip-down" data-aos-delay="200" data-aos-duration="1500">
                  <img class="img-fluid" src="assets\images\integrity.png" alt="integrity">
                  <h3 class="title-2">Integrity</h3>
                  <p class="section-text">Support honesty, transparency, and ethical behavior in all interactions.</p>
              </div>
          </div>
          <div class="col-sm-6 col-md-4" data-aos="flip-down" data-aos-delay="500" data-aos-duration="1500">
              <div class="innovation-col d-flex flex-column align-items-center justify-content-center">
                  <img class="img-fluid" src="assets\images\innovation.png" alt="innovation">
                  <h3 class="title-2">Innovation</h3>
                  <p class="section-text">Value creativity and strive constantly to develop new ideas, products, and solutions that push beyond the limits of what's possible.</p>
              </div>
          </div>
          <div class="col-sm-6 col-md-4" data-aos="flip-down" data-aos-delay="800" data-aos-duration="1500">
              <div class="teamwork-col d-flex flex-column align-items-center justify-content-center">
                  <img class="img-fluid" src="assets\images\teamwork.png" alt="teamwork">
                  <h3 class="title-2">Teamwork</h3>
                  <p class="section-text">Aims to create cooperative atmosphere where each member of the team feels appreciated and respected.</p>
              </div>
          </div>
      </div>
      <div class="row text-center">
          <div class="col-sm-6 col-md-6" data-aos="flip-down" data-aos-delay="1100" data-aos-duration="1500">
              <div class="customer-col d-flex flex-column align-items-center justify-content-center">
                  <img class="img-fluid" src="assets\images\customer.png" alt="customer centricity">
                  <h3 class="title-2">Customer Centricity</h3>
                  <p class="section-text">Committed to understand and fulfill the needs of customers, going above and beyond their expectations, and creating lasting connections built on satisfaction and trust.</p>
              </div>
          </div>
          <div class="col-sm-6 col-md-6" data-aos="flip-down" data-aos-delay="1400" data-aos-duration="1500">
              <div class="account-col d-flex flex-column align-items-center justify-content-center">
                  <img class="img-fluid" src="assets\images\accountability.png" alt="accountability">
                  <h3 class="title-2">Accountability</h3>
                  <p class="section-text">Aims to accept responsibility for deeds and results, holding one another and ourselves responsible for meeting objectives, keeping our word, and always getting better.</p>
              </div>
          </div>
      </div>
  </div>
  
  </section>

            <!-- 
    - #MEET OUR TEAM
  -->
  <section class="about__meet bg-light">
    <div class="container px-5 my-5 justify-content-around">
        <div class="sub-title text-center">
            <h1 class="h1 title-1" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500">Our team</h1>
            <p class="section-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">Meet our dynamic team, driven by passion and expertise, dedicated to empowering your fitness journey with personalized support and guidance.</p>
        </div>
        <div class="row__front row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-around">
            <div class="col-sm-6 col-md-6 d-flex flex-column align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="assets\images\zion.png" height="200px" width="200px"   alt="..." />
                    <h3 class="name__owner">Zion B. Antones</h3>
                    <div class="fst-italic text-muted"> General Manager</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 d-flex flex-column align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="assets\images\justine.png" height="200px" width="200px" alt="..." />
                    <h3 class="name__owner">Justine SA. Janolino</h3>
                    <div class="fst-italic text-muted">Full-stack Developer</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 d-flex flex-column align-items-center justify-content-center mb-5" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1500">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-4 px-4" src="assets\images\max.jpg" height="200px" width="200px" alt="..." />
                    <h3 class="name__owner">Maxene J. Veronica</h3>
                    <div class="fst-italic text-muted">Project Manager</div>
                </div>
            </div>
          </div>
    </div>
</section>



    <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="section footer-top bg-dark has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="assets\images\logo.png">
          </a>

          <p class="footer-brand-text">
            Sweat now, Shine later!
          </p>

          <div class="wrapper">

            <img src="./assets/images/footer-clock.png" width="34" height="34" loading="lazy" alt="Clock">

            <ul class="footer-brand-list">

              <li>
                <p class="footer-brand-title">Monday - Friday</p>

                <p>8:00 AM - 5:00 PM</p>
              </li>

            </ul>

          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Our Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Home</a>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Classes</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Contact Us</p>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="location" aria-hidden="true"></ion-icon>
            </div>

            <address class="address footer-link">
              4000 Lopez Jaena St, San Pablo City, Laguna
            </address>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="call" aria-hidden="true"></ion-icon>
            </div>

            <div>

              <a href="tel:+915552348765" class="footer-link">+63 995 163-6851</a>
            </div>
          </li>

          <li class="footer-list-item">
            <div class="icon">
              <ion-icon name="mail" aria-hidden="true"></ion-icon>
            </div>

            <div>
              <a href="mailto:services@fitlife.com" class="footer-link">gymbuddy@gmail.com</a>
            </div>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title has-before">Our Newsletter</p>
          </li>

          <li>
            <form action="" class="footer-form">
              <input type="email" name="email_address" aria-label="email" placeholder="Email Address" required
                class="input-field">

              <button type="submit" class="btn btn-primary" aria-label="Submit">
                <ion-icon name="chevron-forward-sharp" aria-hidden="true"></ion-icon>
              </button>
            </form>
          </li>

          <li>
            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 Gym Buddy!. All Rights Reserved By <a href="#" class="copyright-link">Gym Buddy!</a>
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link has-before">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link has-before">Terms & Condition</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>

    <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
  </a>

    <!-- BOOTSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
          <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- 
    - Animation On Scroll
  -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>