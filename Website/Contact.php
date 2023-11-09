<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("PHP-Partials/Head.php"); ?>
    <link rel="stylesheet" type="text/css" href="Contact.css">
</head>
<body>


<?php include("PHP-Partials/NavBar.php"); ?>

<!-- Header Section with Image -->
<section class="header-section d-flex align-items-center justify-content-center">
  
  <h1 id="ImageText">Contact</h1>

</section>


<section class="description-section">
    <div class="container">
        <div class="InfoBox row align-items-start">
            <div class="col-md-3">
                <div class="services-list">
                    <a href="Roofing+Siding.php">Roofing and Siding</a>
                    <a href="Bath+BaseRenovations.php">Bathroom and Basement Renovations</a>
                    <a href="Plumbing.php">Plumbing</a>
                    <a href="Contact.php" class="active">Contact</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row gy-3">
                    <div class="col-lg-6" id="MapHeader">
                        <div class "info-item d-flex flex-column justify-content-center align-items-center">
                            <h3><i class="fa-solid fa-location-dot" style="color: #1c8bfa;"></i> Our Address</h3>
                            <p>Address Here</p>
                        </div>
                    </div><!-- End Info Item -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d367.28027060844033!2d-73.5897565739269!3d40.710548557500616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c27dba33962c39%3A0x19a00b52a492bbac!2s1093%20Fayette%20St%2C%20Uniondale%2C%20NY%2011553!5e0!3m2!1sen!2us!4v1699459301831!5m2!1sen!2us" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-5">
                <div class="d-flex justify-content-evenly row">
                    <div class="d-flex justify-content-evenly row">
                        <div class="col-md-6 mb-4 whiteCard">
                            <div class="mr-3">
                                <h3><i class="fa-solid fa-phone" style="color: #1c8bfa;"></i></h3>
                                <h6><p>(516)-312-1362</p></h6>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 whiteCard">
                            <div class="">
                                <h3><i class="fa-solid fa-envelope" style="color: #1c8bfa;"></i></h3>
                                <h6><p>darwin.orios@gmail.com</p></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quoteForm">
                <?php include("PHP-Partials/Form.php"); ?>
                </div>
            </div>
        </div><!-- row align -->
    </div> <!-- container -->

    

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
    <p class="text-center text-muted">© 2023 Company, Inc</p>
  </footer>
</html>