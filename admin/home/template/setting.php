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
                <a class="navbar-brand" href="index.php">
                    <!-- Logo icon -->
                    <b><img src="../../images/logo.png" alt="homepage" class="dark-logo" / style="width:40px"></b>
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
                    <li> <a href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Administator</a></span>
                    </li>
                    <li class="nav-label">Links</li>
                    <li> <a href="user.php" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Users</span></a>
                    <li> <a href="feadback.php" aria-expanded="false"><i class="fa fa-comment"></i><span class="hide-menu">feedbacks</span></a>
                    </li>
                    <li class="nav-label">Shortcut Links</li>
                    <li> <a href="newuser.php" aria-expanded="false"><i class="fa fa-user-plus"></i><span class="hide-menu">Create New User</span></a></li>
                    <li> <a href="newfeadback.php" aria-expanded="false"><i class="fa fa-comments"></i><span class="hide-menu">New Feedback</span></a></li>
                    <li> <a href="#" aria-expanded="false"><i class="fa fa-cogs"></i><span class="hide-menu">Setting</span></a></li>
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
                <h3 class="text-primary">Adminstator <!-- put role here --> page</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
          <div class="col-12" style="background-color:white">
            <h4 class="text-center text-primary">Edit your profile</h4><hr>
          </div>
          <div class="col-12 col-lg-10 mx-auto rounded" style="background-color:white">
            <div class="col-12 col-lg-11 mx-auto">

              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Edit your profile</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Change your password</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <?php
                     class Birth
                     {
                       public $file_id;
                       function birth()
                       {
                         global $obj;
                         $this->email=$_SESSION['admin_email'];
                         $this->password=$_SESSION['admin_password'];
                         $sql="SELECT * FROM admin where email='$this->email' AND psd='$this->password'";
                         $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                           while($row=mysqli_fetch_array($result_set))
                           {
                             ?>
                             <form class="my-3 py-5" action="../data/edit.php?id=<?php echo $row['user_id'] ?>" method="post">
                               <div class="row">
                                 <div class="col-12 col-lg-6 form-group">
                                   <label for="">First Name</label>
                                   <input type="text" name="fname" value="<?php echo $row['firstname'] ?>" placeholder="First Name" class="form-control" required>
                                 </div>
                                 <div class="col-12 col-lg-6 form-group">
                                   <label for="">Last Name</label>
                                   <input type="text" name="lname" value="<?php echo $row['fathername'] ?>" placeholder="Last Name" class="form-control" required>
                                 </div>
                                 <div class="col-12 col-lg-6 form-group">
                                   <label for="">ID No</label>
                                   <input type="text" name="idno" value="<?php echo $row['idno'] ?>" placeholder="ID No" class="form-control" required>
                                 </div>
                                 <div class="col-12 col-lg-6 form-group">
                                   <label for="">Phone No</label>
                                   <input type="text" name="phone" value="<?php echo $row['phone'] ?>" placeholder="Phone No" class="form-control" required>
                                 </div>
                                 <div class="col-12 col-lg-6 form-group">
                                   <label for="">E-mail</label>
                                   <input type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="E-mail" class="form-control" required>
                                 </div>
                                 <div class="col-12 col-lg-6 col form-group">
                                   <label for="">Gender</label>
                                   <select class="custom-select" name="gender">
                                     <option value="<?php echo $row['gender'] ?>"><?php echo $row['gender'] ?></option>
                                     <option value="Male">Male</option>
                                     <option value="Female">Female</option>
                                   </select>
                                 </div>
                                 <div class="col-4 mx-auto form-group">
                                   <input type="submit" name="edit" value="Save changes" class="btn btn-success btn-block">
                                 </div>
                             <?php
                           }
                         }
                       }
                       $list=new birth();
                    ?>
                  </div>
                </form>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <?php
                     class Reset
                     {
                       public $file_id;
                       function reset()
                       {
                         global $obj;
                         $this->email=$_SESSION['admin_email'];
                         $this->password=$_SESSION['admin_password'];
                         $sql="SELECT * FROM admin where email='$this->email' AND psd='$this->password'";
                         $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                           while($row=mysqli_fetch_array($result_set))
                           {
                             ?>
                             <form class="py-5 col-12 col-md-5 mx-auto" action="../data/reset.php?id=<?php echo $row['user_id'] ?>" method="post">
                               <div class="row">
                                 <div class="col-12 form-group">
                                   <input type="text" name="old" value="" placeholder="Old password" class="form-control">
                                 </div>
                                 <div class="col-12 form-group">
                                   <input type="text" name="new" value="" placeholder="New password" class="form-control">
                                 </div>
                                 <div class="col-12 form-group mx-auto">
                                   <input type="submit" name="change" value="Reset your password" class="btn btn-block btn-success">
                                 </div>
                               </div>
                             </form>
                             <?php
                           }
                         }
                       }
                       $list=new reset();
                    ?>
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
