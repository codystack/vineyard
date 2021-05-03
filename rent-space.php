<?php
include "./components/header.php";
include "./components/navbarlight.php";
require_once "./config/auth_controller.php";
?>
    <!-- cover -->
    <section class="bg-dark p-0 text-white">
      <div class="swiper-container">
        <div class="image image-gradient-vertical image-overlay" style="background-image:url(./assets/images/aboutimg.jpeg)"
        data-top-top="transform: translateY(0px);" 
        data-top-bottom="transform: translateY(-250px);"></div>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="caption" data-swiper-parallax="-100%">
              <div class="container">
                <div class="row vh-75 justify-content-center">
                  <div class="col-md-8 col-xl-6 align-self-end">
                    <h1 class="display-2">Own your space</h1>
                    <p class="lead">As the primary retail facility for the surrounding community, The Vineyard Mall strives to provide a complete shopping and entertainment experience. With foreign and local brands as anchor tenants, as well as KFC, the mall has approximately 50 shops with ample parking bays.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- / cover -->


    <!-- features -->
    <section class="bg-dark pt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-xl-6 text-white">
            <div class="row gutter-2">
              <div class="col-6 col-md-4">
                <h4 class="h2 text-orange mb-1">GRA</h4>
                <span>location</span>
              </div>
              <div class="col-6 col-md-4">
                <h4 class="h2 text-orange mb-1">24hrs</h4>
                <span>security</span>
              </div>
              <div class="col-6 col-md-4">
                <h4 class="h2 text-orange mb-1">Available</h4>
                <span>parking bay</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / features -->


    <!-- form -->
    <section class="bg-light">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-4">
            <h2>
              Sell Now <br><b>Get a Space!</b>
            </h2>
            <p class="lead">Get a quote of what it will cost you to own a space at The Vineyard Mall.</p>
          </div>
          <div class="col-md-7">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="form-row">
                    <div class="form-group col">
                        <input type="text" class="form-control form-control-minimal" name="fullName" placeholder="Full Name">
                    </div>
                    <div class="form-group col">
                        <input type="text" class="form-control form-control-minimal" name="companyName" placeholder="Company Name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="email" class="form-control form-control-minimal" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col">
                        <input type="tel" class="form-control form-control-minimal" name="phoneNum" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control form-control-minimal" name="comment" rows="3" placeholder="Aditional Requests"></textarea>
                </div>
                <button type="submit" name="rentshop_btn" class="btn btn-danger text-white mt-3">Request a Quote</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- / form -->



<?php include "./components/footer.php"; ?>