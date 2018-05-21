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
                    <b><img src="../images/logo.png" alt="homepage" class="dark-logo" style="width:40px"/></b>
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
                        <a class="nav-link" href="index.php">
                            Records
                          </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="enumerator.php">
                          Enumerators
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
                    <li> <a href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Supervisor</a></span>
                    </li>
                    <li class="nav-label">Links</li>
                    <li> <a href="enumerator.php" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Enumerators</span></a>
                    <li> <a href="approval.php" aria-expanded="false"><i class="fa fa-comments"></i><span class="hide-menu">Approval</span></a>
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
                <h3 class="text-primary">Supervisor Page</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Supervisor</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->

        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card bg-primary p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-user f-s-40"></i></span>
                            </div>
                            <?php
                               class NewPerson
                               {
                                 function newPerson()
                                 {
                                   global $obj;
                                   $sql="SELECT * FROM newperson";
                                   $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                   $no_rows = mysqli_num_rows($result_set);
                                   if($no_rows > 0)
                                    {
                                     ?>
                                     <div class="media-body media-text-right">
                                         <h2 class="color-white"><?php echo $no_rows ?></h2>
                                         <p class="m-b-0">Newly Registered</p>
                                     </div>
                                     <?php
                                   }
                                   else {
                                     echo "No Record ";
                                   }
                                 }
                               }
                               $list=new newPerson();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-pink p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-user f-s-40"></i></span>
                            </div>
                            <?php
                               class Emigrated
                               {
                                 function emigrated()
                                 {
                                   global $obj;
                                   $sql="SELECT * FROM emigrator";
                                   $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                   $no_rows = mysqli_num_rows($result_set);
                                   if($no_rows > 0)
                                    {
                                     ?>
                                     <div class="media-body media-text-right">
                                         <h2 class="color-white"><?php echo $no_rows ?></h2>
                                         <p class="m-b-0">Emigrated</p>
                                     </div>
                                     <?php
                                   }
                                   else {
                                     echo "No Record ";
                                   }
                                 }
                               }
                               $list=new emigrated();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-primary p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-user f-s-40"></i></span>
                            </div>
                            <?php
                               class Imigrated
                               {
                                 function imigrated()
                                 {
                                   global $obj;
                                   $sql="SELECT * FROM imigrator";
                                   $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                   $no_rows = mysqli_num_rows($result_set);
                                   if($no_rows > 0)
                                    {
                                     ?>
                                     <div class="media-body media-text-right">
                                         <h2 class="color-white"><?php echo $no_rows ?></h2>
                                         <p class="m-b-0">Imigrated</p>
                                     </div>
                                     <?php
                                   }
                                   else {
                                     echo "No Record ";
                                   }
                                 }
                               }
                               $list=new imigrated();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-danger p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-user f-s-40"></i></span>
                            </div>
                            <?php
                               class Death
                               {
                                 function death()
                                 {
                                   global $obj;
                                   $sql="SELECT * FROM death";
                                   $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                   $no_rows = mysqli_num_rows($result_set);
                                   if($no_rows > 0)
                                    {
                                     ?>
                                     <div class="media-body media-text-right">
                                         <h2 class="color-white"><?php echo $no_rows ?></h2>
                                         <p class="m-b-0">Death</p>
                                     </div>
                                     <?php
                                   }
                                   else {
                                     echo "No Record ";
                                   }
                                 }
                               }
                               $list=new death();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-primary p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-user f-s-40"></i></span>
                            </div>
                            <?php
                               class Birth
                               {
                                 function birth()
                                 {
                                   global $obj;
                                   $sql="SELECT * FROM birth";
                                   $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                   $no_rows = mysqli_num_rows($result_set);
                                   if($no_rows > 0)
                                    {
                                     ?>
                                     <div class="media-body media-text-right">
                                         <h2 class="color-white"><?php echo $no_rows ?></h2>
                                         <p class="m-b-0">Birth</p>
                                     </div>
                                     <?php
                                   }
                                   else {
                                     echo "No Record ";
                                   }
                                 }
                               }
                               $list=new birth();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                  <div class="col-12 col-lg-4 mx-auto card card-body bg-info">
                    <a href="approved.php" class="text-center nav-link rounded bg-info h2">Approve</a>
                  </div>
                </div>
            </div>
          </div>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->



        </div>
        <!-- End Container fluid  -->
        <!-- footer -->
        <footer class="footer"> © 2018  Woldiya City Census Bureau  </footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
</div>
