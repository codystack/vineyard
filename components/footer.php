    <!-- footer -->
    <footer class="bg-dark text-white">
      <div class="container py-5">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-5 text-center text-md-left">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="terms">Terms of Use</a>
              </li>
            </ul>
          </div>
          <div class="col-md-2 text-center">
            <img class="logo-sm" src="./assets/images/vinelogo_white.png" alt="Logo">
          </div>
          <div class="col-md-5 text-center text-md-right">
            <ul class="socials">
              <li><a href="https://www.facebook.com/thevineyardshoppingcenter/" target="_blank" class="icon-facebook fs-20"></a></li>
              <li><a href="https://www.instagram.com/thevineyardsc/" target="_blank" class="icon-instagram fs-20"></a></li>
              <li><a href="https://twitter.com/thevineyardsc" target="_blank" class="icon-twitter fs-20"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-12 pb-3">
            <p class="copyright text-sm text-center"> © <script>document.write(new Date().getFullYear());</script> The Vinneyard Mall <br>Built by <a href="https://thankgodokoro.codes" target="_blank">TeeGee&trade;</a></p>
        </div>
      </div>
    </footer>
    <!-- / footer -->


    <script src="./assets/js/vendor.js"></script>
    <script src="./assets/js/app.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//code.tidio.co/5jp3rjgxxp00tz1xtzllemukkutin4zm.js" async></script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAME5wJgLdn1aQSxC7-iWxJ3isuveK9Rv4&amp;callback=initMap" async defer></script>

    <?php
      if (isset($_SESSION['success_message']))
      {
          ?>
          <script>
              swal({
                  title: "<?php echo $_SESSION['success_message_title']; ?>",
                  text: "<?php echo $_SESSION['success_message']; ?>",
                  icon: "success",
                  buttons: false,
                  timer: 3000
              });
          </script>
          <?php
          unset($_SESSION['success_message']);
      }
    ?>

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
                timer: 3000
            });
        </script>
        <?php
        unset($_SESSION['message']);
    }
    ?>

    <script>
       function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 4.81389, lng: 6.99718},
          zoom: 15,
          disableDefaultUI: true,
          styles: [
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#212121"
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#212121"
                }
              ]
            },
            {
              "featureType": "administrative",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "administrative.country",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "administrative.locality",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#bdbdbd"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#181818"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#1b1b1b"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry.fill",
              "stylers": [
                {
                  "color": "#2c2c2c"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#8a8a8a"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#373737"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#3c3c3c"
                }
              ]
            },
            {
              "featureType": "road.highway.controlled_access",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#4e4e4e"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                },
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "transit",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#000000"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#3d3d3d"
                }
              ]
            }
          ]
        });

        var pin ='./assets/images/pin.svg';

        var marker = {
            url: pin,
            //state your size parameters in terms of pixels
            size: new google.maps.Size(70, 60),
            scaledSize: new google.maps.Size(70, 60),
            origin: new google.maps.Point(0,0)
        }

        var marker = new google.maps.Marker({
          position: map.getCenter(),
          icon: pin,
          map: map
        });
      }
    </script>
    

  </body>

</html>