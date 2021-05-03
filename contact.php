<?php
include "./components/header.php";
include "./components/navbarlight.php";
require_once "./config/auth_controller.php";
?>


    <!-- map -->
    <section class="hero hero-with-header text-white">
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
    </section>
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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
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
                    <option selected>Select Service</option>
                    <option>Play Ground</option>
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

<?php include "./components/footer.php"; ?>