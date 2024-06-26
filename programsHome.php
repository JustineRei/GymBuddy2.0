<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
        <!-- CSS -->
        <link rel="stylesheet" href="assets\css\styleClass.css">
    
          <!-- 
        - google font link
      -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link
        href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"
        rel="stylesheet">

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
                <a href="home.php" class="navbar-link" data-nav-link>Home</a>
              </li>
    
              <li>
                <a href="aboutHome.php" class="navbar-link" data-nav-link>About Us</a>
              </li>
    
              <li>
                <a href="programsHome.php" class="navbar-link active" data-nav-link>Programs</a>
              </li>
              <li>
            <a href="coaches.php" class="navbar-link active" data-nav-link>Coaches</a>
          </li>
    
              <li>
                <a href="pricing.php" class="navbar-link" data-nav-link>Pricing</a>
              </li>
    
              <li>
                <a href="https://www.facebook.com/profile.php?id=61559908066456" class="navbar-link  " data-nav-link>Contact Us</a>
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
    - #CLASSES LARGER
  -->
 <!-- Hero Section -->
 <section id="home" class="section hero dark-bg text-light d-flex align-items-center" style="background-image: url('assets/images/hero-bg.png') ">
  <div class="container mb-5">
      <h1 class="h1 title-1" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500">Welcome to Our Gym</h1>
      <p class="section-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">Start your fitness journey with us! Our programs cater to all levels and goals.</p>
      <a href="#strength" class="btn btn-primary btn-lg mt-4" data-aos="flip-up" data-aos-delay="1000" data-aos-duration="1500">Explore Programs</a>
  </div>
</section>

<!-- Classes Section -->
<section id="strength" class="class-section py-5 bg-light mt-4 mb-5">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-md-6">
              <h1 class="h1 title-2" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500">Strength Training</h1>
              <p class="section-text" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500">Strength training involves exercises designed to improve muscle strength and endurance by using resistance, such as weights or body weight. It helps increase muscle mass, boost metabolism, and enhance overall physical performance.</p>
              <a href="strength_training.php" class="btn btn-primary" data-aos="flip-up" data-aos-delay="500" data-aos-duration="1500">Join Now</a>
          </div>
          <div class="col-md-6 text-center">
              <img src="assets/images/strength.jpg" class="img-fluid rounded" alt="Strength Training" data-aos="fade-left" data-aos-delay="800" data-aos-duration="1500">
          </div>
      </div>
  </div>
</section>

<section id="fat-burning" class="class-section py-5 mb-5">
  <div class="container">
      <div class="row align-items-center flex-md-row-reverse">
          <div class="col-md-6">
              <h1 class="h1 title-2" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500">Fat Burning</h1>
              <p class="section-text" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1500">Fat burning refers to the process of using stored body fat as a source of energy during physical activities, leading to weight loss and improved body composition. This can be achieved through a combination of cardiovascular exercises, strength training, and a balanced diet that creates a calorie deficit.</p>
              <a href="fat_burning.png" class="btn btn-primary" data-aos="flip-up" data-aos-delay="1000" data-aos-duration="600">Join Now</a>
          </div>
          <div class="col-md-6 text-center">
              <img src="assets/images/fat.jpg" class="img-fluid rounded" alt="Fat Burning" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500">
          </div>
      </div>
  </div>
</section>

<section id="hiit" class="class-section py-5 bg-light mb-5">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-md-6">
              <h1 class="h1 title-2" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500">HIIT Training</h1>
              <p class="section-text" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500">HIIT (High-Intensity Interval Training) involves short bursts of intense exercise alternated with low-intensity recovery periods or rest. This training method boosts cardiovascular fitness, burns more calories in less time, and enhances metabolic rate even after the workout.</p>
              <a href="hiit_training.php" class="btn btn-primary" data-aos="flip-up" data-aos-delay="1000" data-aos-duration="500">Join Now</a>
          </div>
          <div class="col-md-6 text-center">
              <img src="assets/images/hiit.jpg" class="img-fluid rounded" alt="HIIT Training" data-aos="fade-left" data-aos-delay="1400" data-aos-duration="800">
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

                <p>8:00Am - 5:00Pm</p>
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