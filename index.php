<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Manager</title>

  <!-- - favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- - custom css link-->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- - google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- - HEADER -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.png" alt="task manager logo">
      </a>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <li>
            <a href="#hero" class="navbar-link">Home</a>
          </li>
          <li>
            <a href="#features" class="navbar-link">Features</a>
          </li>
          <li>
            <a href="#about" class="navbar-link">About</a>
          </li>

          <!-- <li>
            <a href="#contact" class="navbar-link">Contact Us</a>
          </li> -->

        </ul>

        <div class="btn-group">
          <a href="auth/login.php" class="btn btn-secondary">log In</a>
          <a href="auth/register.php"class="btn btn-primary">Register Now</a>
        </div>
        
      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- - HERO -->

      <section class="hero" id="hero">
        <div class="container">

          <div class="hero-content">
            <h1 class="h1 hero-title">Become More Productive Daily </h1>

            <p class="hero-text">
              "Most powerful time management tool is a daily list of activities that you create to serve as a blueprint for your day." ~Brian Tracy
            </p>

            <p class="form-text">
              Plan your daily task, rate your productivity level and keep record of all task.
            </p>

            <div class="btn-group">
              <a href="auth/login.php" class="btn btn-secondary">Log In</a>
              <a href="auth/register.php" class="btn btn-primary">Register Now</a>
            </div>
          </div>

          <figure class="hero-banner">
            <img src="./assets/images/illustration.svg" alt="Hero image">
          </figure>

        </div>
      </section>


      <!-- - ABOUT -->

      <section class="about" id="features">
        <div class="container">

          <div class="about-content">

            <div class="about-icon">
              <ion-icon name="newspaper-outline"></ion-icon>
            </div>

            <h2 class="h2 about-title">Why Use Task Manager?</h2>

            <p class="about-text">
              Nam libero tempore cum soluta as nobis est eligendi optio cumque nihile impedite quo minus id quod maxime.
            </p>

            <button class="btn btn-outline">Learn More</button>

          </div>

          <ul class="about-list">

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="thumbs-up"></ion-icon>
                </div>

                <h3 class="h3 card-title">Easy To Use</h3>

                <p class="card-text">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                </p>

              </div>
            </li>
            
            <li>
              <div class="about-card">
            
                <div class="card-icon">
                  <ion-icon name="clipboard-outline"></ion-icon>
                </div>
            
                <h3 class="h3 card-title">Plan Task</h3>
            
                <p class="card-text">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                </p>
            
              </div>
            </li>
            
            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="trending-up"></ion-icon>
                </div>

                <h3 class="h3 card-title">Productivity Rate</h3>

                <p class="card-text">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                </p>

              </div>
            </li>

            

            <li>
              <div class="about-card">

                <div class="card-icon">
                  <ion-icon name="server"></ion-icon>
                </div>

                <h3 class="h3 card-title">Keep Record</h3>

                <p class="card-text">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>




<!-- - FEATURES-->

<section class="features" id="about">
  <div class="container">


    <div class="features-wrapper">

      <figure class="features-banner">
        <img src="./assets/images/t22.png" alt="illustration art">
      </figure>

      <div class="features-content">

        <p class="features-content-subtitle">
          <ion-icon name="newspaper-outline"></ion-icon>

          <span>ABOUT TASK MANAGER</span>
          
        </p>

        <h3 class="features-content-title">
          We do the work you <strong>stay focused</strong> on <strong>your customers.</strong>
        </h3>

        <p class="features-content-text">
          Temporibus autem quibusdam et aut officiis debitis aut rerum a necessitatibus saepe eveniet ut et
          voluptates repudiandae
          sint molestiae non recusandae itaque.
        </p>

        <ul class="features-list">

          <li class="features-list-item">
            <ion-icon name="rocket-outline"></ion-icon>

            <p>Donec pede justo fringilla vel nec.</p>
          </li>

          <li class="features-list-item">
            <ion-icon name="wifi-outline"></ion-icon>

            <p>Cras ultricies mi eu turpis hendrerit fringilla.</p>
          </li>

        </ul>

        <div class="btn-group">
          <a href="auth/login.php" class="btn btn-secondary">Log In</a>
          <a href="auth/register.php" class="btn btn-primary">Register Now</a>

          
        </div>

      </div>

    </div>

  </div>
</section>





  <!-- - FOOTER -->

  <footer>

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.png" alt="task manager logo">
          </a>

          <p class="footer-text">
            Cras ultricies mi eu turpis sit hendrerit fringilla vestibulum ante ipsum primis in faucibus ultrices
            posuere cubilia.
          </p>



        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">QUICK LINK</p>
            </li>

            <li>
              <a href="#hero" class="footer-link">Home</a>
            </li>

            <li>
              <a href="#about" class="footer-link">About</a>
            </li>

            <li>
              <a href="#features" class="footer-link">Features</a>
            </li>


          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">ACTIONS</p>
            </li>

            <li>
              <a href="auth/login.php" class="footer-link">Log In</a>
            </li>

            <li>
              <a href="auth/register.php" class="footer-link">Register</a>
            </li>


          </ul>

          <ul class="footer-list">
          
            <li>
              <p class="footer-item-title">CONECT WITH US</p>
            </li>
          
            <li>
              <a href="#" class="footer-link">Facebook</a>
            </li>
          
            <li>
              <a href="#" class="footer-link">Twitter</a>
            </li>

            <li>
              <a href="#" class="footer-link">Instagram</a>
            </li>
          
          </ul>

          

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2022 <a href="">Tochard</a>. All Right Reserved
        </p>
      </div>
    </div>

  </footer>





  <!-- - custom js link-->
  <script src="./assets/js/script.js"></script>

  <!-- - ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>