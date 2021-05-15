<?php
include "./components/header.php";
include "./components/navbarlight.php";
?>

    <!-- cover -->
    <section class="p-0">
      <div class="gallery">
        <div class="gallery-container">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="image image-overlay" style="background-image:url(./assets/images/aboutimg.jpeg)">
              </div>
              <div class="caption text-white" data-swiper-parallax="-100%">
                <div class="container">
                  <div class="row justify-content-center align-items-center vh-90">
                    <div class="col-md-8 col-lg-6 text-center">
                      <span class="eyebrow mb-2">Welcome</span>
                      <h1 class="display-2">Your convenient shopping center</h1>
                      <a href="directory" type="button" class="btn btn-xl btn-white">Explore the Mall</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="image image-overlay" style="background-image:url(./assets/images/hme1.jpeg)">
              </div>
              <div class="caption text-white" data-swiper-parallax="-100%">
                <div class="container">
                  <div class="row justify-content-center align-items-center vh-90">
                    <div class="col-md-8 col-lg-6 text-center">
                      <span class="eyebrow mb-2">Kids Zone</span>
                      <h1 class="display-2">Fun filled games for kids</h1>
                      <a href="directory" type="button" class="btn btn-xl btn-white">See More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="image image-overlay" style="background-image:url(./assets/images/hme4.jpg)">
              </div>
              <div class="caption text-white" data-swiper-parallax="-100%">
                <div class="container">
                  <div class="row justify-content-center align-items-center vh-90">
                    <div class="col-md-8 col-lg-6 text-center">
                      <span class="eyebrow mb-2">Health Care</span>
                      <h1 class="display-2">Health is wealth.</h1>
                      <a href="directory" type="button" class="btn btn-xl btn-white">See Stores</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="gallery-thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <h5>Welcome</h5>
            </div>
            <div class="swiper-slide">
              <h5>Kids Zone</h5>
            </div>
            <div class="swiper-slide">
              <h5>Health Care</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / cover -->


    <!-- about -->
    <section class="section-decorated-bottom">
      <div class="decorated-bottom text-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40"  preserveAspectRatio="none">  
          <path d="">
            <animate 
              attributeName="d" 
              begin="0s" 
              dur="5s"
              repeatCount="indefinite"
              values="
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
              M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
              M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
          </path>
        </svg>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <h2>The Vineyard Mall is more than shopping, it's an experience.</h2>
          </div>
          <div class="col-lg-6">
            <p class="lead">The Vineyard Mall is a world class state-of-the-art facility which features luxurious retail shop spaces, elegant food court and restaurant, serene relaxation spot and nightlife entertainment area and so much more. This premium shopping and lifestyle destination.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- / about -->


    <!--covid update-->
    <section class="bg-light section-decorated-bottom">
      <div class="decorated-bottom text-dark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40"  preserveAspectRatio="none">  
          <path d="">
            <animate 
              attributeName="d" 
              begin="0s" 
              dur="5s"
              repeatCount="indefinite"
              values="
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
              M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
              M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
          </path>
        </svg>
      </div>
      <div class="container">
        <div class="row align-items-center justify-content-center presentation-container">
          <div class="col-8 col-md-6 col-lg-4" data-aos="zoom-in">
            <div class="presentation-circle">
              <figure style="background-image: url('./assets/images/hmecovid.jpg')"></figure>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 pl-md-7 text-center text-md-left">
            <span class="eyebrow text-danger mb-1">What are you doing to keep safe?</span>
            <h3 class="h2">Stop the spread!</h3>
            <p>The Vioneyard Mall is a No Mask, No Entry establishment<br><strong>Stay Safe, Take Personal Responsibility</strong><br> Your temperature will be scanned before you are allowed access into the mall. The health and safety of our customers, employees at The Vineyard mall and our community is our highest priority. Try to avoid leaving home if you feel unwell.</p>
            <a href="covid19-update" type="button" class="btn btn-xl btn-danger">Get more update</a>
          </div>
        </div>
      </div>
    </section>
    <!--covid update-->

    <!-- what we offer -->
    <section class="bg-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 text-white text-center">
            <h2><b>Opening</b> Hours</h2>
            <h5>Shop in a safe space</h5>
            <p class="lead">Mon - Sat: 9am - 6pm<br> Sun: 10am - 6pm</p>
            <h4>Call Us: <a href="tel:+2347011666864">0701 166 6864</a></h4>
          </div>
        </div>
        <div class="row text-white" data-aos="fade-left">
          <div class="col">
          </div>
        </div>
      </div>
    </section>
    <!-- what we offer -->

    <!-- presentation -->
    <section class="section-lg">
      <div class="container">
        <div class="row my-10">
          <div class="col-lg-6">
            <div class="row">
              <div class="col">
                <h2>OUR SERVICES:<br> <b>SOME AWESOME</b> <br>THINGS WE DO.</h2>
              </div>
            </div>
            <div class="row gutter-3">
              <div class="col-md-6" data-aos="fade-up">
                <div class="media">
                  <i class="icon-check-circle2 fs-30 text-danger mr-2"></i>
                  <div class="media-body">
                    <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Entertainment</h5>
                    <p>A place designed for amusement, lots of fun activities  for the family.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-up">
                <div class="media">
                  <i class="icon-check-circle2 fs-30 text-danger mr-2"></i>
                  <div class="media-body">
                    <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Fashion</h5>
                    <p>For the latest, trendy, style, clothes and accessories for men, women and children.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-up">
                <div class="media">
                  <i class="icon-check-circle2 fs-30 text-danger mr-2"></i>
                  <div class="media-body">
                    <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Restaurant</h5>
                    <p>An ambience for home made meals and relaxation with friends and associates.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-up">
                <div class="media">
                  <i class="icon-check-circle2 fs-30 text-danger mr-2"></i>
                  <div class="media-body">
                    <h5 class="mt-0 text-uppercase font-weight-bold fs-14 letter-spacing">Kids Zone</h5>
                    <p>Get your kids preoccupied with fun filled arcade games, play station, etc.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 presentation presentation-responsive">
            <img class="left-0 vertical-align" src="./assets/images/servimg.png" alt="Image">
          </div>
        </div>
      </div>
    </section>
    <!-- / presentation -->

<?php include "./components/footer.php";?>