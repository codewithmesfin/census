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
                    <?php include("form.php") ?>
                    <!-- nav links -->
                    <li class="nav-item">
                        <a class="nav-link" href="newuser.php">
                          New User
                          </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../data/backup.php">
                          Create Backup
                          </a>

                    </li>

                    <!-- End nav links -->
                    <!-- Profile -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                            <ul class="dropdown-user">
                                <li><a href="setting.php"><i class="ti-settings"></i> Setting</a></li>
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
                    <li> <a href="setting.php" aria-expanded="false"><i class="fa fa-cogs"></i><span class="hide-menu">Setting</span></a></li>
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
                                         <p class="m-b-0">Total Population</p>
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
                               class User
                               {
                                 function user()
                                 {
                                   global $obj;
                                   $sql="SELECT * FROM user";
                                   $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                   $no_rows = mysqli_num_rows($result_set);
                                   if($no_rows > 0)
                                    {
                                     ?>
                                     <div class="media-body media-text-right">
                                         <h2 class="color-white"><?php echo $no_rows ?></h2>
                                         <p class="m-b-0">Total users</p>
                                     </div>
                                     <?php
                                   }
                                   else {
                                     echo "No Record ";
                                   }
                                 }
                               }
                               $list=new user();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-danger p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-time f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2 class="color-white">One Day Ago</h2>
                                <p class="m-b-0">Recent Backup</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- /# column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h4>Recently Created Users</h4>
                        </div>
                        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover ">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Role</th>
                  <th>Time</th>
                </tr>
              </thead>
                <?php
                   class Enumerator
                   {
                     function enumerator()
                     {
                       global $obj;
                       $count=0;
                       $sql="SELECT * FROM user ORDER BY firstname ASC";
                       $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                       while($row=mysqli_fetch_array($result_set))
                       {
                         $count++;
                         ?>
                         <tbody>
                           <tr>
                             <td><?php echo $row['firstname']." ".$row['lastname'] ?></td>
                             <td><?php echo $row['priviledge'] ?></td>
                             <td><?php echo $row['reg_date'] ?></td>
                           </tr>
                         </tbody>
                         <?php
                       }
                     }
                   }
                   $list=new enumerator();
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>

                <!-- /# column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h4>Recent Users Activity</h4>
                        </div>
                        <div class="card-body">
                            <div class="recent-meaasge">
                                <div class="media">
                                    <div class="media-body">
                                      <?php
                                         class Role
                                         {
                                           function role()
                                           {
                                             global $obj;
                                             $sql="SELECT * FROM user LIMIT 5";
                                             $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                             while($row=mysqli_fetch_array($result_set))
                                             {
                                               ?>
                                               <div class="row">
                                                 <div class="media-left col-2">
                                                   <a href="#"><img alt="..." src="images/default.jpg" class="media-object"></a>
                                                 </div>
                                                 <div class="col-10">
                                                   <h4 class="media-heading"><?php echo $row['firstname']." ".$row['lastname'] ?></h4>
                                                   <div class="meaasge-date"><?php echo $row['lastlogindate']."".$row['lastlogintime'] ?></div>
                                                   <p class="f-s-12">Registered New population </p>
                                                 </div>
                                               </div><hr>
                                               <?php
                                             }
                                           }
                                         }
                                         $list=new role();
                                      ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Feadbacks</h4>
                            </div>
                            <div class="card-body">
                                <div class="recent-meaasge">
                                    <div class="media">
                                        <div class="media-body">
                                          <?php
                                             class Feadback
                                             {
                                               function feadback()
                                               {
                                                 global $obj;
                                                 $sql="SELECT * FROM feadback LIMIT 5";
                                                 $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                                 while($row=mysqli_fetch_array($result_set))
                                                 {
                                                   ?>
                                                   <div class="row">
                                                     <div class="media-left col-2">
                                                       <a href="#"><img alt="..." src="images/default.jpg" class="media-object"></a>
                                                     </div>
                                                     <div class="col-10">
                                                       <h4 class="media-heading"><?php echo $row['fullname'] ?></h4>
                                                       <div class="meaasge-date"><?php echo $row['date']."   ".$row['time'] ?></div>
                                                       <p class="f-s-12"><?php echo $row['feadback'] ?></p>
                                                     </div>
                                                   </div>
                                                   <?php
                                                 }
                                               }
                                             }
                                             $list=new feadback();
                                          ?>
                                        </div>
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- /# column -->
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
