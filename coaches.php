<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meet Our Coach</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets\css\styleCoach.css">
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
            <a href="programs.php" class="navbar-link active" data-nav-link>Programs</a>
          </li>

          <li>
            <a href="coaches.php" class="navbar-link active" data-nav-link>Coaches</a>
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

  <section id="home" class="section hero dark-bg text-light d-flex align-items-center" style="background-image: url('assets/images/hero-bg.png') ">
    <div class="container mb-5">
        <h1 class="h1 title-1" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500">Meet Our Coach</h1>
    </div>
  </section>   



  <div class="container text-center mb-5">
    <div class="row justify-content-center gy-4">
      <div class="col-md-6 col-lg-4">
        <div class="card coach-card shadow-lg">
          <img src="assets/images/coach-annie.jpg" class="card-img-top coach-img" alt="Coach Annie">
          <div class="card-body">
            <h5 class="card-title">Annie Lyn Riva</h5>
            <p class="card-text">Personal Trainer servicing BGC and Makati. ACE Certified. Specializing in fitness and nutrition coaching.</p>
            <a href="https://www.facebook.com/annielynrivas" class="btn btn-primary">Chat Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card coach-card shadow-lg">
          <img src="assets/images/coach-culver.jpg" class="card-img-top coach-img" alt="Coach Culver">
          <div class="card-body">
            <h5 class="card-title">Culver Padilla</h5>
            <p class="card-text">An advocate of sustainable fitness, Culver already started his online motivational coaching a few years ago.</p>
            <a href="https://www.facebook.com/johnculverpadilla" class="btn btn-primary">Chat Now</a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card coach-card shadow-lg">
          <img src="assets/images/coach-ida.jpg" class="card-img-top coach-img" alt="Coach Ida">
          <div class="card-body">
            <h5 class="card-title">Ida Paras</h5>
            <p class="card-text">Ida co-founded The Movement Studio, which specialises in both cardio and strength training tutorials.</p>
            <a href="https://www.facebook.com/ida.paras" class="btn btn-primary">Chat Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- 
- custom js link
-->
<script src="./assets/js/script.js" defer></script>
<!-- 
- Animation On Scroll
-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
