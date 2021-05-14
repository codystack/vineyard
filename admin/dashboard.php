<?php
include "./components/header.php";
require_once "../config/auth_controller.php";
?>


    <section class="p-0 bg-light">
      <div class="image image-overlay image-cover" style="background-image:url(../assets/images/aboutimg.jpeg)"
      data-top-top="transform: translateY(0px);" 
      data-top-bottom="transform: translateY(-250px);"></div>
      <div class="container">
        <div class="row justify-content-center align-items-end vh-50 mb-5">
          <div class="col col-md-10 col-lg-8">
            <div class="row align-items-center">
              <div class="col-4 col-lg-3">
                <img class="mr-3 avatar avatar-xl rounded" src="../<?php echo $_SESSION['picture']; ?>" alt="Generic placeholder image">
              </div>
              <div class="col">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <h2 class="mb-0"><b><?php echo $_SESSION['firstName']; ?></b> <?php echo $_SESSION['lastName']; ?></h2>
                    <span class="text-muted"><?php echo $_SESSION['position']; ?></span>
                  </div>
                  <div class="col-md-4 text-left text-md-right">
                    <a href="logout" class="btn btn-rounded btn-ico btn-white" data-toggle="tooltip" data-placement="top" title="Log Out"><i class="icon-log-out fs-20"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="bg-light p-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col col-md-10 col-lg-8">
            <div class="nav nav-tabs mb-1">
              <a class="nav-item nav-link active" data-toggle="tab" href="#demo-2-1">Profile</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-2">Connections</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-3">Info Request</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-4">Add Store</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#demo-2-5">Rent Space Request</a>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="bg-light pt-2">

      <div class="container">
        <div class="tab-content" id="demo-2">

          <!-- tab info -->
          <div class="tab-pane show active" id="demo-2-1" role="tabpanel" aria-labelledby="demo-2-1">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                
                <!-- stats -->
                <div class="row gutter-1 mb-2">
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed bg-danger text-white">
                        <div class="equal-header">
                        <?php
                        $countTraffic = mysqli_query($conn, "SELECT id FROM traffic");
                        echo "<b class=\"h2\">".mysqli_num_rows($countTraffic)."</b>";
                        ?>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">Visitors Traffic</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed">
                        <div class="equal-header">
                        <?php
                        $countInfoRequest = mysqli_query($conn, "SELECT id FROM inforequest");
                        echo "<b class=\"h2\">".mysqli_num_rows($countInfoRequest)."</b>";
                        ?>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">Info Request</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed">
                        <div class="equal-header">
                          <b class="h2">9</b>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">Listed Stores</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-3">
                    <div class="equal">
                      <div class="boxed">
                        <div class="equal-header">
                        <?php
                        $countSpaceRequest = mysqli_query($conn, "SELECT id FROM rentspace");
                        echo "<b class=\"h2\">".mysqli_num_rows($countSpaceRequest)."</b>";
                        ?>
                        </div>
                        <div class="equal-footer">
                          <span class="text-muted">Space Request</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / stats -->

              </div>
            </div>
          </div>
          <!-- / tab -->


          <!-- tab connections -->
          <div class="tab-pane" id="demo-2-2" role="tabpanel" aria-labelledby="demo-2-2">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                <div class="row gutter-1">
                  <div class="col-12">
                    <div class="boxed p-2">
                      <div class="row align-items-center justify-content-between">
                        <div class="col-10">
                          <div class="media align-items-center">
                            <img src="../upload/healthplus.jpg" alt="Avatar" class="avatar avatar-lg rounded mr-3">
                            <div class="media-body">
                              <h5 class="mb-0">Health Plus</h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-2 text-md-right">
                          <div class="dropdown">
                            <a class="btn btn-ico btn-outline-light text-dark rounded btn-sm" href="#" role="button" id="dropdownMenuLink-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-more-vertical fs-22"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-7">
                              <a class="dropdown-item" href="#">Make Primary</a>
                              <a class="dropdown-item" href="#">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / tab -->

          <!-- tab groups -->
          <div class="tab-pane" id="demo-2-3" role="tabpanel" aria-labelledby="demo-2-3">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                <div class="row">
                  <div class="col">
                    <div class="boxed p-3">
                      <div class="table-responsive">
                        <table id="inforequest-datatables" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                <?php
                                $select_query = "SELECT * FROM inforequest ORDER BY date ASC";;
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $fullName = $row['fullName'];
                                        $email = $row['email'];
                                        $date = $row['date'];

                                        echo "<tr>";
                                        echo "<td class=\"budget\">" .$fullName. "</td>";
                                        echo "<td class=\"budget\">" .date("d(D) M Y", strtotime($date)). "</td>";

                                        echo "<td class='text-right'>"
                                            ."<button class=\"btn btn-icon spaceinfo btn-sm btn-info\" data-id='".$id."'>
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-zoom-split-in\"></i></span>
                                                <span class=\"btn-inner--text\"><i class='far fa-eye'></i>View</span>
                                            </button>
                                            
                                            <a href=\"\" class=\"btn btn-icon btn-sm btn-danger\">
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-ruler-pencil\"></i></span>
                                                <span class=\"btn-inner--text\">Delete</span>
                                            </a>".
                                            "</td >";
                                        "</tr>";
                                    }
                                }else {
                                    echo "<td><p>No Info Request Yet!</p></td>";
                                }
                                ?>
                                </tbody>
                            <tfoot>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / tab -->

          <!-- tab settings -->
          <div class="tab-pane" id="demo-2-4" role="tabpanel" aria-labelledby="demo-2-4">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">

                <div class="row">
                  <div class="col">
                    <h5 class="mb-2 fs-20 font-weight-normal">Shop Information</h5>
                    <form>
                      <div class="form-row">
                        <div class="col">
                          <div class="form-group">
                            <label for="firstName">Shop Name</label>
                            <input type="email" class="form-control" id="firstName" aria-describedby="firstName" placeholder="Xclusive Store">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="secondName">Shop Phone Number</label>
                            <input type="email" class="form-control" id="secondName" aria-describedby="secondName" placeholder="08012349876">
                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col">
                          <div class="form-group">
                            <label for="userMail">Shop Email</label>
                            <input type="email" class="form-control" id="userMail" aria-describedby="userMail" placeholder="johndoe@example.com">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="userMail">Upload Shop Picture</label>
                            <input type="file" class="form-control-file form-control" id="exampleFormControlFile1">
                          </div>
                        </div>
                      </div>
                      <div class="form-row mt-1 align-items-center">
                        <div class="col-3">
                          <button class="btn btn-primary">Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / tab -->

          <!-- tab payment -->
          <div class="tab-pane" id="demo-2-5" role="tabpanel" aria-labelledby="demo-2-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-8">
                <div class="row">
                  <div class="col">
                    <div class="boxed p-3">
                      <div class="table-responsive">
                        <table id="spacerequest-datatables" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                <?php
                                $select_query = "SELECT * FROM rentspace ORDER BY date ASC";;
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $fullName = $row['fullName'];
                                        $email = $row['email'];
                                        $date = $row['date'];

                                        echo "<tr>";
                                        echo "<td class=\"budget\">" .$fullName. "</td>";
                                        echo "<td class=\"budget\">" .date("d(D) M Y", strtotime($date)). "</td>";

                                        echo "<td class='text-right'>"
                                            ."<button class=\"btn btn-icon spaceinfo btn-sm btn-info\" data-id='".$id."'>
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-zoom-split-in\"></i></span>
                                                <span class=\"btn-inner--text\"><i class='far fa-eye'></i>View</span>
                                            </button>
                                            
                                            <a href=\"\" class=\"btn btn-icon btn-sm btn-danger\">
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-ruler-pencil\"></i></span>
                                                <span class=\"btn-inner--text\">Delete</span>
                                            </a>".
                                            "</td >";
                                        "</tr>";
                                    }
                                }else {
                                    echo "<td><p>No Rent Space Request Yet!</p></td>";
                                }
                                ?>
                                </tbody>
                            <tfoot>
                                <tr>
                                    <th>Client Name</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- / tab -->
        </div>
      </div>
    </section>


<?php include "./components/footer.php"; ?>