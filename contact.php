<?php
include "./components/header.php";
include "./components/navbarlight.php";
require_once "./config/auth_controller.php";

  $recaptchaSecret = '6Lc7nR4rAAAAAEmjajZiA7xyBZh5Oh_UDzDkYnHx';
  $response = $_POST['g-recaptcha-response'];
  $remoteip = $_SERVER['REMOTE_ADDR'];

  $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$response}&remoteip={$remoteip}");
  $responseData = json_decode($verify);

  if ($responseData->success) {
      // Verified successfully
      //echo "Success!";
  } else {
      // Failed verification
      //echo "reCAPTCHA failed. Please try again.";
  }
?>

    <section class="hero hero-with-header text-white">
      <div class="image image-overlay" style="background-image:url(./assets/images/aboutimg.jpeg); background-position: top;"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col text-shadow">
            <h1 class="mb-0">Contact <b>us</b></h1>
            <p class="lead">Visit our mall or send us a message.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- map -->
    <!-- <section class="hero hero-with-header text-white">
      <div class="map">
        <div class="container">
          <div class="row vh-50 align-items-end">
            <div class="col-md-10">
              <h1 class="mb-0">Port Harcourt</h1>
              <p>88 Woji Road, GRA Phase 2.</p>
            </div>
          </div>
        </div>
        <div id="map" class="map-area"></div> 
      </div>
    </section> -->
    <!-- / map -->


    <section class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <span class="eyebrow mb-1 text-dark">Get in touch with us</span>
            <h2>We’ll get back to you as soon as possible.</h2>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <form id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
              <div class="form-row mb-1">
                <div class="col">
                  <input type="text" name="fullName" class="form-control form-control-minimal" placeholder="Name">
                </div>
                <div class="col">
                  <input type="text" name="email" class="form-control form-control-minimal" placeholder="Email">
                </div>
              </div>
              <div class="form-row mb-1">
                <div class="col">
                  <input type="tel" name="phoneNum" class="form-control form-control-minimal" placeholder="Phone">
                </div>
                <div class="col">
                  <select class="form-control form-control-minimal" name="service" id="serviceSelect">
                    <option selected disabled>Select Service</option>
                    <option>Play Ground</option>
                    <option>Food Court Order</option>
                    <option>Juice Bar Order</option>
                    <option>Hall Rental</option>
                    <option>Store Leasing</option>
                    <option>Chairs & Tent Rental</option>
                    <option>General Enquiries</option>
                  </select>
                </div>
              </div>
              <div class="form-row mb-1">
                <div class="col">
                  <textarea name="comment" class="form-control form-control-minimal" id="exampleFormControlTextarea1" rows="5" placeholder="Your Message"></textarea>
                </div>
              </div>
              <div class="mb-3">
                <div class="g-recaptcha" data-sitekey="6Lc7nR4rAAAAALypQ0LoFzCzhOHBtVMuq-InXYfY"></div>
              </div>
              <div class="form-row mt-3">
                <div class="col">
                  <button name="inforequest_btn" class="btn btn-dark px-5">Send Mail</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <section class="map">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="boxed p-5">
              <h2>The Vineyard Shopping Mall</h2>
              <ul class="list-group list-group-line">
                <li class="list-group-item d-flex align-items-center">
                  <i class="icon-map-pin2 fs-24 text-danger"></i>
                  <span>88 Woji Rd, GRA Phase 2, Port Harcourt.</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <i class="icon-mail fs-24 text-danger"></i>
                  <span>info@thevineyard.ng</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <i class="icon-phone2 fs-24 text-danger"></i>
                  <span>08124173351 <span class="text-danger">||</span> 07041589373</span>
                </li>
              </ul>
              <a href="https://maps.app.goo.gl/pGP8C3Mmehvf1UiZ8" target="_blank" class="btn btn-primary btn-block btn-rounded mt-2">View Full Map</a>
            </div>
          </div>
        </div>
      </div>
      <div id="map" class="map-area"></div>
    </section>

<?php include "./components/footer.php"; ?>