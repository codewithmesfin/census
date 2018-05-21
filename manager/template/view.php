<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">
    <!-- header header  -->
    <div class="header">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- Logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index1.html">
                    <!-- Logo icon -->
                    <b><img src="../images/logo.png" alt="homepage" class="dark-logo"  style="width:40px"/></b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>CENSUS</span>
                </a>
            </div>
            <!-- End Logo -->
            <div class="navbar-collapse">
                <!-- toggle and nav items -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                </ul>
                <!-- User profile and search -->
                <ul class="navbar-nav my-lg-0">
                    <!-- nav links -->
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">
                            View report
                          </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="generate.php">
                          Generate report
                        </a>

                    </li>

                    <!-- End nav links -->
                    <!-- Profile -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                            <ul class="dropdown-user">
                                <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End header header -->
    <!-- Left Sidebar  -->
    <div class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider"></li>
                    <li class="nav-label">Home</li>
                    <li> <a href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Manager</a></span>
                    </li>
                    <li class="nav-label">Links</li>
                    <li> <a href="enumerator.php" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Enumerators</span></a>
                    </li>
                    <li class="nav-label">Shortcut Links</li>
                    <li> <a href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Record</span></a></li>
                    <li> <a href="logout.php" aria-expanded="false"><i class="fa fa-power-off"></i><span class="hide-menu">Log out</span></a></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </div>
    <!-- End Left Sidebar  -->
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Manager Page</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Manager</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <div class="">
          <div class="container">
            <div class="">
              <div class="row">
                <div class="col-12 col-lg-11">
                  <div class="">
                    <div class="tab_contents">
                      <div class="">
                        <div class="">
                          <div class="container-fluid">
                            <div class="" style="background-color:white">
                              <!-- Tab panels -->
                              <div class="tab-content">

                                  <!--Panel 1-->
                                  <div class="tab-pane fade in show active" id="panel51" role="tabpanel">
                                      <div class="row">
                                        <div class="col-12">
                                            <p class="text-center text-primary h6">View your Daily reports</p>
                                        </div>
                                        <div class="col-12 col-lg-11 mx-auto">
                                          <form class="pb-5 pt-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                            <div class="row">
                                              <div class="col-12 col-lg-10">
                                                <select class="custom-select" name="item">
                                                  <option value="Select date">Select date</option>
                                                  <?php
                                                    class Date
                                                    {
                                                      function date()
                                                      {
                                                        global $obj;
                                                        $sql="SELECT * from report";
                                                        $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                                        while($row=mysqli_fetch_array($result_set))
                                                        {
                                                          ?>
                                                          <option value="<?php echo $row['date'] ?>"><?php echo $row['date'] ?></option>
                                                          <?php
                                                        }
                                                      }
                                                    }
                                                    $list=new date();
                                                     ?>
                                                </select>
                                              </div>
                                              <div class="col-12 col-lg-2">
                                                <input type="submit" name="report" value="View" class="btn btn-info btn-block">
                                              </div>
                                            </div>
                                          </form>
                                          <hr>
                                          <?php
                                            class Report
                                            {
                                              function report()
                                              {
                                                global $obj;
                                                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                                  $search=$_POST["item"];
                                                  global $obj;
                                                  $sql="SELECT DISTINCT * from report WHERE date='$search'";
                                                  $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                                  while($row=mysqli_fetch_array($result_set))
                                                  {
                                                    ?>
                                                    <h4 class="strong b text-info" style="font-family:serif"><?php echo $row['title'] ?></h4>
                                                    <p class="text-left col mx-auto"><?php echo $row['content'] ?></p>
                                                    <p class="text-muted small text-right"><?php echo $row['date']." ".$row['time'] ?></p>
                                                    <?php
                                                  }
                                                }
                                                else {
                                                  $sql="SELECT DISTINCT * from report";
                                                  $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                                  while($row=mysqli_fetch_array($result_set))
                                                  {
                                                    ?>
                                                    <h4 class="strong b text-info" style="font-family:serif"><?php echo $row['title'] ?></h4>
                                                    <p class="text-left col mx-auto"><?php echo $row['content'] ?></p>
                                                    <p class="text-primary small text-right"><?php echo $row['date']." ".$row['time'] ?></p>
                                                    <?php
                                                  }
                                                }
                                              }
                                            }
                                            $list=new Report();
                                             ?>
                                        </div>
                                      </div>
                                  </div>
                                  <!--/.Panel 1-->
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
          </div>
        </div>



        </div>
        <!-- End Container fluid  -->
        <!-- footer -->
        <footer class="footer"> © 2018  Woldiya City Census Bureau  </footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
</div>
