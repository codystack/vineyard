<?php
include "./components/header.php";
include "./components/navbarlight.php";
?>

    <!-- cover -->
    <section class="hero hero-with-header text-white"
      data-top-top="transform: translateY(0px);" 
      data-top-bottom="transform: translateY(250px);">
      <div class="image image-overlay" style="background-image:url(./assets/images/aboutimg.jpeg); background-position: top;"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col text-shadow">
            <h1 class="mb-0">The <b>Directory</b></h1>
            <p class="lead">Navigate the mall without the help of a tour guide.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- / cover -->

    <section class="bg-light separator-bottom">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-5 pl-md-5 text-center text-md-left">
            <span class="eyebrow text-primary mb-1">Special for you</span>
            <h2 class="mb-2"><b>Air Baloon</b> Festival</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos tempore, inventore accusamus odio</p>
            <a href="" class="btn btn-primary btn-rounded">Book Now</a>
          </div>
          <div class="col-md-6 aos-init aos-animate" data-aos="zoom-in">
            <div class="presentation-circle">
              <figure style="background-image: url('./assets/images/dirimg.jpg')"></figure>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="bg-danger text-white separator-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center">
            <h2>Interested in leasing a store or make enquiry about our hall rental?</h2>
            <a href="rent-space" class="btn btn-outline-white px-5 ml-1 mt-2">Rent a Space</a>
          </div>
        </div>
      </div>
    </section>


<?php include "./components/footer.php"; ?>