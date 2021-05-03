<?php
session_start();
require_once "../config/auth_controller.php";
?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=description content="The Vineyard Mall is a world class state-of-the-art facility which features luxurious retail shop spaces, elegant food court and restaurant, serene relaxation spot and nightlife entertainment area and so much more located on Woji road, GRA Phase two, Port Harcourt, Rivers State, Nigeria.">
    <meta name=author content="ThankGod Okoro">
    <meta property="og:url" content="https://www.iverify.ng"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="The Vineyard Mall&trade; :: All you need under one roof"/>
    <meta name="og:description" content="The Vineyard Mall is a world class state-of-the-art facility which features luxurious retail shop spaces, elegant food court and restaurant, serene relaxation spot and nightlife entertainment area and so much more located on Woji road, GRA Phase two, Port Harcourt, Rivers State, Nigeria.">
    <meta name="keywords" content="Shopping, Vineyard, Vineyard Mall, Shopping mall in Port Harcourt, Shopping Mall, KFC, KFC in Port Harcourt, Kenturkey Fried Chicken, Kids zone, Play ground, Kids fun games, Night Life in Port Harcourt, Night Life, Food, Meals, Arcade, Play station in Port Harcout, Event center, Wedding reception, Event hall, Rentals, Shppoing Mart, Vineyard mart, Woji road, GRA Phase 2, Port harcourt, Rivers State">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.imgur.com/ElAvRTS.png"/>
    <title>Admin Login :: The Vineyard Mall&trade;</title>
    <link rel="stylesheet" href="../assets/css/vendor.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />

  </head>
  <body>

    <div class="viewport">
      <div class="image image-overlay" style="background-image:url(../assets/images/aboutimg.jpeg)"></div>
      <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
          <div class="col-md-6 col-lg-5">
            <div class="accordion-group accordion-group-portal" data-accordion-group>
              <div class="accordion open" data-accordion>
                <div class="accordion-control" data-control>
                  <h5>Sign In</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput2">Password</label>
                        <input type="password" class="form-control" name="password">
                      </div>
                      <button name="adminlogin_btn" class="btn btn-danger btn-block">Sign In</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <script src="../assets/js/vendor.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
      if (isset($_SESSION['message']))
      {
    ?>
      <script>
        swal({
            title: "<?php echo $_SESSION['message_title']; ?>",
            text: "<?php echo $_SESSION['message']; ?>",
            icon: "error",
            buttons: false,
            timer: 4000
        });
      </script>
    <?php
        unset($_SESSION['message']);
      }
    ?>

  </body>


</html>