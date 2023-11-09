<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("PHP-Partials/Head.php"); ?>
    <link rel="stylesheet" type="text/css" href="Bath+BaseRenocations.css">
</head>
<body>


<div class="hero">
  
    <div class="info container d-flex align-items-center">
       <h1 id="HeadingText">Bathroom and Basement Renovations</h1>
      </div>
    </div>
  
  
  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide full-screen-carousel myCarousel" data-bs-ride="carousel">
    
    <div class="carousel-inner full-screen-carousel">
      <div class="carousel-item active" style="background-image: url(../WebsiteImages/Roofing+Siding/BasementRenovation.jpg);">
        <div class="container">
          
        </div>
      </div>
      <div class="carousel-item" style="background-image: url(../WebsiteImages/Roofing+Siding/BathroomRemodel.jpg);">
        <div class="container">
          
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Carousel -->
  
  </div>
  <!-- Hero End -->


  <?php include("PHP-Partials/NavBar.php"); ?>


  <section class="description-section">
    <div class="container ">
      <div class="InfoBox row align-items-start">
        
        <div class="col-lg-3" data-aos="fade">

          
        <div class="services-list">
          <a href="Roofing+Siding.php" >Roofing and Siding</a>
          <a href="Bath+BaseRenovations.php" class="active">Bathroom and Basement Renovations</a>
          <a href="Plumbing.php" >Plumbing</a>
          <a href="Contact.php">Contact</a>
        </div>


          <div class="quoteForm">
          <?php include("PHP-Partials/Form.php"); ?>
          </div>
          
        </div>

      
        <div class="col-lg-8">
        <img id="InfoImage" src="../WebsiteImages/Roofing+Siding/Before-After.jpg" alt="Description Image">
        <h1 id="InfoHeading">Your Vision, Our Reality</h1>
        <p>Transform your home with our unrivaled basement and bathroom renovation services. At Allensandro Home Improvement, we recognize the vital role that these spaces play in your home. Our unwavering commitment to excellence sets us apart as industry leaders.</p>
        <p>We believe in delivering the highest quality of work, underpinned by our unshakable confidence in the expertise and craftsmanship of our team. From the meticulous selection of premium materials to the precision of our installations, our work exemplifies the industry's highest standards. Our promise to you is simple: we will turn your vision into a tangible reality. Our structures are not just visually appealing; they are designed for unparalleled functionality. We work hand-in-hand with architects and designers to ensure that your home reflects your unique style, making it a true reflection of your personality and preferences. When you choose Allensandro Home Improvement for your basement and bathroom renovation needs, you are choosing a partner that delivers top-tier workmanship and an unwavering assurance of quality.</p>
        </div>
      </div>
    </div>
  </section>

    
</body>


<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Services</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Projects</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2021 Company, Inc</p>
  </footer>


</html>