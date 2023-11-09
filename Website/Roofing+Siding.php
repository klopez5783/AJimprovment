<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("PHP-Partials/Head.php"); ?>

  <link rel="stylesheet" type="text/css" href="Roofing+Siding.css">

</head>
<body>
  <?php include("PHP-Partials/NavBar.php"); ?>


  <!-- Header Section with Image -->
  <section class="header-section d-flex align-items-center justify-content-center">
    
    <h1 id="ImageText">Roofing and Siding</h1>

  </section>



  <!-- Description Section -->
  <section class="description-section">
    <div class="container ">
      <div class="InfoBox row align-items-start">
        
        <div class="col-lg-3" data-aos="fade">

          
        <div class="services-list">
          <a href="Roofing+Siding.php" class="active">Roofing and Siding</a>
          <a href="Bath+BaseRenovations.php">Bathroom and Basement Renovations</a>
          <a href="Plumbing.php">Plumbing</a>
          <a href="Contact.php">Contact</a>
        </div>


          <div class="quoteForm">
          <?php include("PHP-Partials/Form.php"); ?>
          </div>
          
        </div>

      
        <div class="col-lg-8">
          <img id="InfoImage" src="../WebsiteImages/Roofing+Siding/Siding.jpg" alt="Description Image">

          <h1 id="InfoHeading">Your Vision, Our Reality</h1>

          <p>Roofing and siding are two integral components of a home's structure that not only enhance its aesthetics but also play a crucial role in protecting it from the elements. At our company, we take great pride in the services we offer, and we understand the importance of these two key aspects of your home. We are committed to providing the highest quality of work, backed by our confidence in our team's expertise and craftsmanship.</p>
          <p>Our dedication to excellence is at the core of everything we do. We approach each roofing and siding project with unwavering commitment, ensuring that every aspect of the work is meticulously executed. From the selection of top-grade materials to the precision of our installations, our work reflects the highest standards in the industry. Our promise is to transform your vision into reality, crafting structures that are not only visually appealing but also incredibly functional. We work closely with architects and designers to ensure that your home reflects your unique style. When you choose us for your roofing and siding needs, you're choosing a partner that provides top-tier workmanship and an assurance of quality.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Contact Form Section -->
  
  <!-- Carousel Section (Previous Work & Testimonials) -->
  <section class="carousel-section">
  <div id="QuoteCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="QuoteCarousel-inner">
      <div class="carousel-item active">
        <blockquote class="class="blockquote d-flex align-items-center"">
        <div class="row align-items-start">
        <div class="col">
          
        <div class="align-items-center">
            <p class="font-italic lead">
              <i class="fa fa-quote-left mr-3 text-primary"></i>
              Allensandro Home Improvement is truly outstanding! Our home in Mill Neck has been beautifully renovated, and we couldn't be happier with the results.
            </p>
            <footer class="blockquote-footer">From Reyes in Mill Neck</footer>
        </div>
        
        </div>
        <div class="col col-img">
          <img class="CarouselImage" src="../WebsiteImages/Roofing+Siding/Before-After.jpg" alt="Description Image">
        </div>
      </div>
        </blockquote>
      

      </div>
      <div class="carousel-item">
        <blockquote class="blockquote d-flex align-items-center">
          <div class="row align-items-start">
            <div class="col">
              <p class="font-italic lead">
                <i class="fa fa-quote-left mr-3 text-primary"></i>
                Your quote text here.
              </p>
              <footer class="blockquote-footer">Your source here</footer>
            </div>
            <div class="col col-img">
              <img class="CarouselImage" src="path-to-image.jpg" alt="Description Image">
            </div>
          </div>
        </blockquote>
      </div>

      <div class="carousel-item">
        <blockquote class="blockquote d-flex align-items-center">
          <div class="row align-items-start">
            <div class="col">
              <p class="font-italic lead">
                <i class="fa fa-quote-left mr-3 text-primary"></i>
                Your quote text here.
              </p>
              <footer class="blockquote-footer">Your source here</footer>
            </div>
            <div class="col col-img">
              <img class="CarouselImage" src="path-to-image.jpg" alt="Description Image">
            </div>
          </div>
        </blockquote>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#QuoteCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#QuoteCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- End Carousel -->
  </section>

  <!-- Footer Section -->
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Services</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Projects</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2023 Company, Inc</p>
  </footer>
</body>
</html>
