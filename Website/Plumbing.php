<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("PHP-Partials/Head.php"); ?>
    <link rel="stylesheet" type="text/css" href="Plumbing.css">
</head>
<body>

<?php include("PHP-Partials/NavBar.php"); ?>


<!-- Header Section with Image -->
<section class="header-section d-flex align-items-center justify-content-center">
  
  <h1 id="ImageText">Plumbing</h1>

</section>



<!-- Description Section -->
<section class="description-section">
  <div class="container ">
    <div class="InfoBox row align-items-start">
      
      <div class="col-lg-3" data-aos="fade">

        
        <div class="services-list">
          <a href="Roofing+Siding.php" >Roofing and Siding</a>
          <a href="Bath+BaseRenovations.php">Bathroom and Basement Renovations</a>
          <a href="Plumbing.php" class="active">Plumbing</a>
          <a href="Contact.php">Contact</a>
        </div>


        <div class="quoteForm">
        <?php include("PHP-Partials/Form.php"); ?>
        </div>
        
      </div>

    
      <div class="col-lg-8">
        <img id="InfoImage" src="../WebsiteImages/Roofing+Siding/Plumbing.jpg" alt="Plumbing Services Image">
        <h1 id="InfoHeading">Quality Plumbing Services</h1>
        <p>Transform your plumbing systems with our exceptional plumbing services. At Allensandro Home Improvement, we understand the essential role that plumbing plays in your home. Our unwavering commitment to excellence sets us apart as industry leaders.</p>
        <p>We believe in delivering the highest quality of work, backed by our unshakable confidence in the expertise and craftsmanship of our team. From meticulous plumbing installations to ensuring top-grade materials are used, our work exemplifies the industry's highest standards. Our promise to you is simple: we will turn your plumbing vision into a tangible reality. Our plumbing solutions are not just reliable; they are designed for unparalleled functionality. We collaborate closely with architects and designers to ensure that your plumbing system suits your unique style and needs. When you choose Allensandro Home Improvement for your plumbing needs, you are selecting a partner that delivers top-tier workmanship and an unwavering assurance of quality.</p>
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