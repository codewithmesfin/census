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
                    <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
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

                    <!-- Search -->
                  <?php include("form.php") ?>
                    <!-- nav links -->
                    <li class="nav-item">
                        <a class="nav-link" href="newuser.php">
                            New User
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
                    <li> <a href="index1.html" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</a></span>
                    </li>
                    <li class="nav-label">Links</li>
                    <li> <a href="user.php" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Users</span></a>
                    <li> <a href="feadback.php" aria-expanded="false"><i class="fa fa-comment"></i><span class="hide-menu">feedbacks</span></a>
                    </li>
                    <li class="nav-label">Shortcut Links</li>
                    <li> <a href="newuser.php" aria-expanded="false"><i class="fa fa-user-plus"></i><span class="hide-menu">Create New User</span></a></li>
                    <li> <a href="#" aria-expanded="false"><i class="fa fa-comments"></i><span class="hide-menu">New Feedback</span></a></li>
                    <li> <a href="logout.php" aria-expanded="false"><i class="fa fa-power-off"></i><span class="hide-menu">Setting</span></a></li>
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
                <h3 class="text-primary">Adminstator <!-- put role here --> Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <!-- /# column -->
                <div class="col-12">
                    <div class="card">
                        <div class="">
                            <h4 class="text-center text-primary">Users within their roles</h4>
                        </div>
                        <div class="card-body">
                            <div class="recent-meaasge"><hr>
                              <?php
                                 class Users
                                 {
                                   function users()
                                   {
                                     global $obj;
                                     $sql="SELECT * FROM user";
                                     $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                     while($row=mysqli_fetch_array($result_set))
                                     {
                                       ?>
                                       <div class="media col-12 col-lg-11 mx-auto">
                                            <div class="media-left">
                                                 <a href="#"><img alt="..." src="images/default.jpg" class="media-object"></a>
                                             </div>
                                             <div class="media-body">
                                                 <h4 class="media-heading"><?php echo $row['firstname']." ".$row['lastname'] ?></h4>
                                                 <div class="meaasge-date">
                                                   <a href="#" class="btn text-danger">Delete</a>
                                                   <a href="#" class="btn text-primary">Edit</a>
                                                 </div>
                                                 <p class="f-s-12"><?php echo "Role: ".$row['priviledge'] ?></p>
                                                 <p class="f-s-12"><?php echo "E-mail: ".$row['email'] ?></p>
                                                 <p class="f-s-12"><?php echo "Phone: ".$row['phone'] ?></p>
                                                 <p class="text-center text-info">Last Login: <small><?php echo $row['lastlogindate']." ".$row['lastlogintime'] ?></small> </p>
                                             </div>
                                       </div>
                                       <?php
                                     }
                                   }
                                 }
                                 $list=new users();
                              ?>
                            </div>
                        </div>
                    </div>
                </div>
    </div>




            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
        <!-- footer -->
        <footer class="footer"> © 2018  Woldiya City Census Bureau  </footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
</div>
