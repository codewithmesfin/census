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
                    <b><img src="../images/logo.png" alt="homepage" class="dark-logo" style="width:40px" /></b>
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
                    <li> <a href="approve.php" aria-expanded="false"><i class="fa fa-comments"></i><span class="hide-menu">Approval</span></a>
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
                <h3 class="text-primary">Supervisor</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Supervisor</li>
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
                    <div class="">
                      <div class="">
                        <!-- Nav tabs -->
                        <div class="tabs-wrapper col-12 col-lg-10 mx-auto">
                            <ul class="nav classic-tabs tabs-cyan" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link waves-light active" data-toggle="tab" href="#panel51" role="tab">Newly Registered Person</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#emigrated" role="tab">Emigrated</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#imigrated" role="tab">Imigrated</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel53" role="tab">Death</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel54" role="tab">Birth</a>
                                </li>
                            </ul>
                      </div><hr>
                    </div>
                    </div>
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
                                            <p class="text-center text-primary h6">Newly Registered Person</p>
                                        </div>
                                        <div class="col-12 col-lg-11 mx-auto">
                                          <div class="row">
                                            <div class="col-12">
                                              <hr>
                                            </div>
                                              <?php
                                                 class NewPerson
                                                 {
                                                   function newPerson()
                                                   {
                                                     global $obj;
                                                     $count=0;
                                                     $sql="SELECT * FROM newperson";
                                                     $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                                     while($row=mysqli_fetch_array($result_set))
                                                     {
                                                       $count++;
                                                       ?>
                                                       <div class="col-12 col-lg-2 py-3 d-none d-lg-block">
                                                         <h1 class="text-left text-primary"><?php echo $count; ?></h1>
                                                       </div>
                                                       <div class="media col-12 col-lg-8">
                                                         <div class="row">
                                                           <p class="col-12">First Name: <?php echo $row['firstname']." ".$row['lastname']." ".$row['gfname'] ?></p>
                                                           <p class="col-12 col-lg-6">ID No: <?php echo $row['idno'] ?></p>
                                                           <p class="col-12 col-lg-6">Nationality: <?php echo $row['nationality'] ?></p>
                                                           <p class="col-12 col-lg-6">Region: <?php echo $row['region'] ?></p>
                                                           <p class="col-12 col-lg-6">Zone: <?php echo $row['zone'] ?></p>
                                                           <p class="col-12 col-lg-6">Woreda: <?php echo $row['woreda'] ?></p>
                                                           <p class="col-12 col-lg-6">Town: <?php echo $row['town'] ?></p>
                                                           <p class="col-12 col-lg-6">Kebele: <?php echo $row['kebele'] ?></p>
                                                           <p class="col-12 col-lg-6">Birth date: <?php echo $row['bdate'] ?></p>
                                                           <p class="col-12 col-lg-6">Gender: <?php echo $row['gender'] ?></p>
                                                           <p class="col-12 col-lg-6">Registered date: <?php echo $row['regdate'] ?></p>
                                                         </div>
                                                       </div>
                                                       <div class="col-12 col-lg-2 my-5 py-5">
                                                         <ul class="nav nav-fill">
                                                           <li class="nav-item">
                                                             <a href="data/delete.php?id=<?php echo $row['user_id'] ?>&amp dbname=newperson" class="text-danger ">Delete</a>
                                                           </li>
                                                         </ul>
                                                       </div>
                                                       <div class="col-12">
                                                         <hr>
                                                       </div>
                                                       <?php
                                                     }
                                                   }
                                                 }
                                                 $list=new newPerson();
                                              ?>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  <!--/.Panel 1-->

                                  <!--Panel 2-->
                                  <div class="tab-pane fade" id="emigrated" role="tabpanel">
                                    <div class="row">
                                      <div class="col-12">
                                          <p class="text-center text-primary h6">Emigrated</p>
                                      </div>
                                      <div class="col-12 col-lg-11 mx-auto py-3">
                                        <div class="row">
                                          <div class="col-12">
                                            <hr>
                                          </div>
                                            <?php
                                               class Emigrated
                                               {
                                                 function emigrated()
                                                 {
                                                   global $obj;
                                                   $count=0;
                                                   $sql="SELECT * FROM emigrator";
                                                   $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                                   while($row=mysqli_fetch_array($result_set))
                                                   {
                                                     $count++;
                                                     ?>
                                                     <div class="col-12 col-lg-2 py-3 d-none d-lg-block">
                                                       <h1 class="text-left text-primary"><?php echo $count; ?></h1>
                                                     </div>
                                                     <div class="media col-12 col-lg-8">
                                                       <div class="row">
                                                         <p class="col-12">First Name: <?php echo $row['firstname']." ".$row['lastname']." ".$row['gfname'] ?></p>
                                                         <p class="col-12 col-lg-6">ID No: <?php echo $row['idno'] ?></p>
                                                         <p class="col-12 col-lg-6">Nationality: <?php echo $row['nationality'] ?></p>
                                                         <p class="col-12 col-lg-6">Region: <?php echo $row['region'] ?></p>
                                                         <p class="col-12 col-lg-6">Zone: <?php echo $row['zone'] ?></p>
                                                         <p class="col-12 col-lg-6">Woreda: <?php echo $row['woreda'] ?></p>
                                                         <p class="col-12 col-lg-6">Town: <?php echo $row['town'] ?></p>
                                                         <p class="col-12 col-lg-6">Kebele: <?php echo $row['kebele'] ?></p>
                                                         <p class="col-12 col-lg-6">Birth date: <?php echo $row['bdate'] ?></p>
                                                         <p class="col-12 col-lg-6">Gender: <?php echo $row['gender'] ?></p>
                                                         <p class="col-12 col-lg-6">Registered date: <?php echo $row['regdate'] ?></p>
                                                         <p class="col-12 col-lg-6">Emigrated To: <?php echo $row['emigratedto'] ?></p>
                                                         <p class="col-12 col-lg-6">Emigrated date: <?php echo $row['edate'] ?></p>
                                                       </div>
                                                     </div>
                                                     <div class="col-12 col-lg-2 my-5 py-5">
                                                       <ul class="nav nav-fill">
                                                         <li class="nav-item">
                                                           <a href="data/delete.php?id=<?php echo $row['user_id'] ?>&amp dbname=emigrator" class="text-danger ">Delete</a>
                                                         </li>
                                                       </ul>
                                                     </div>
                                                     <div class="col-12">
                                                       <hr>
                                                     </div>
                                                     <?php
                                                   }
                                                 }
                                               }
                                               $list=new emigrated();
                                            ?>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--/.Panel 2-->
                                  <!--Panel 2-->
                                  <div class="tab-pane fade" id="imigrated" role="tabpanel">
                                    <div class="row">
                                      <div class="col-12">
                                          <p class="text-center text-primary h6">Imigrated</p>
                                      </div>
                                      <div class="col-12 col-lg-11 mx-auto py-3">
                                        <div class="row">
                                          <div class="col-12">
                                            <hr>
                                          </div>
                                            <?php
                                               class Imigrated
                                               {
                                                 function Imigrated()
                                                 {
                                                   global $obj;
                                                   $count=0;
                                                   $sql="SELECT * FROM imigrator";
                                                   $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                                   while($row=mysqli_fetch_array($result_set))
                                                   {
                                                     $count++;
                                                     ?>
                                                     <div class="col-12 col-lg-2 py-3 d-none d-lg-block">
                                                       <h1 class="text-left text-primary"><?php echo $count; ?></h1>
                                                     </div>
                                                     <div class="media col-12 col-lg-8">
                                                       <div class="row">
                                                         <p class="col-12">First Name: <?php echo $row['firstname']." ".$row['lastname']." ".$row['gfname'] ?></p>
                                                         <p class="col-12 col-lg-6">ID No: <?php echo $row['idno'] ?></p>
                                                         <p class="col-12 col-lg-6">Nationality: <?php echo $row['nationality'] ?></p>
                                                         <p class="col-12 col-lg-6">Region: <?php echo $row['region'] ?></p>
                                                         <p class="col-12 col-lg-6">Zone: <?php echo $row['zone'] ?></p>
                                                         <p class="col-12 col-lg-6">Woreda: <?php echo $row['woreda'] ?></p>
                                                         <p class="col-12 col-lg-6">Town: <?php echo $row['town'] ?></p>
                                                         <p class="col-12 col-lg-6">Kebele: <?php echo $row['kebele'] ?></p>
                                                         <p class="col-12 col-lg-6">Birth date: <?php echo $row['bdate'] ?></p>
                                                         <p class="col-12 col-lg-6">Gender: <?php echo $row['gender'] ?></p>
                                                         <p class="col-12 col-lg-6">Registered date: <?php echo $row['regdate'] ?></p>
                                                         <p class="col-12 col-lg-6">Emigrated From: <?php echo $row['imigratedfrom'] ?></p>
                                                         <p class="col-12 col-lg-6">Emigrated date: <?php echo $row['edate'] ?></p>
                                                       </div>
                                                     </div>
                                                     <div class="col-12 col-lg-2 my-5 py-5">
                                                       <ul class="nav nav-fill">
                                                         <li class="nav-item">
                                                           <a href="data/delete.php?id=<?php echo $row['user_id'] ?>&amp dbname=imigrator" class="text-danger ">Delete</a>
                                                         </li>
                                                       </ul>
                                                     </div>
                                                     <div class="col-12">
                                                       <hr>
                                                     </div>
                                                     <?php
                                                   }
                                                 }
                                               }
                                               $list=new imigrated();
                                            ?>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--/.Panel 2-->

                                  <!--Panel 3-->
                                  <div class="tab-pane fade" id="panel53" role="tabpanel">
                                    <div class="row">
                                      <div class="col-12">
                                          <p class="text-center text-primary h6">Death</p>
                                      </div>
                                      <div class="col-12 col-lg-11 mx-auto py-3">
                                        <div class="row">
                                          <div class="col-12">
                                            <hr>
                                          </div>
                                            <?php
                                               class Death
                                               {
                                                 function death()
                                                 {
                                                   global $obj;
                                                   $count=0;
                                                   $sql="SELECT * FROM death";
                                                   $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                                   while($row=mysqli_fetch_array($result_set))
                                                   {
                                                     $count++;
                                                     ?>
                                                     <div class="col-12 col-lg-2 py-3 d-none d-lg-block">
                                                       <h1 class="text-left text-primary"><?php echo $count; ?></h1>
                                                     </div>
                                                     <div class="media col-12 col-lg-8">
                                                       <div class="row">
                                                         <p class="col-12">First Name: <?php echo $row['firstname']." ".$row['lastname']." ".$row['gfname'] ?></p>
                                                         <p class="col-12 col-lg-6">ID No: <?php echo $row['idno'] ?></p>
                                                         <p class="col-12 col-lg-6">Nationality: <?php echo $row['nationality'] ?></p>
                                                         <p class="col-12 col-lg-6">Region: <?php echo $row['region'] ?></p>
                                                         <p class="col-12 col-lg-6">Zone: <?php echo $row['zone'] ?></p>
                                                         <p class="col-12 col-lg-6">Woreda: <?php echo $row['woreda'] ?></p>
                                                         <p class="col-12 col-lg-6">Town: <?php echo $row['town'] ?></p>
                                                         <p class="col-12 col-lg-6">Kebele: <?php echo $row['kebele'] ?></p>
                                                         <p class="col-12 col-lg-6">Birth date: <?php echo $row['bdate'] ?></p>
                                                         <p class="col-12 col-lg-6">Gender: <?php echo $row['gender'] ?></p>
                                                         <p class="col-12 col-lg-6">Registered date: <?php echo $row['regdate'] ?></p>
                                                         <p class="col-12 col-lg-6">Death cause: <?php echo $row['death_cause'] ?></p>
                                                         <p class="col-12 col-lg-6">Died date: <?php echo $row['ddate'] ?></p>
                                                       </div>
                                                     </div>
                                                     <div class="col-12 col-lg-2 my-5 py-5">
                                                       <ul class="nav nav-fill">
                                                         <li class="nav-item">
                                                           <a href="data/delete.php?id=<?php echo $row['user_id'] ?>&amp dbname=death" class="text-danger ">Delete</a>
                                                         </li>
                                                       </ul>
                                                     </div>
                                                     <div class="col-12">
                                                       <hr>
                                                     </div>
                                                     <?php
                                                   }
                                                 }
                                               }
                                               $list=new death();
                                            ?>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--/.Panel 3-->

                                  <!--Panel 4-->
                                  <div class="tab-pane fade" id="panel54" role="tabpanel">
                                    <div class="row">
                                      <div class="col-12">
                                          <p class="text-center text-primary h6">Birth</p>
                                      </div>
                                      <div class="col-12 col-lg-11 mx-auto">
                                        <div class="row">
                                          <div class="col-12">
                                            <hr>
                                          </div>
                                            <?php
                                               class Birth
                                               {
                                                 function birth()
                                                 {
                                                   global $obj;
                                                   $count=0;
                                                   $sql="SELECT * FROM birth";
                                                   $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                                   while($row=mysqli_fetch_array($result_set))
                                                   {
                                                     $count++;
                                                     ?>
                                                     <div class="col-12 col-lg-2 py-3 d-none d-lg-block">
                                                       <h1 class="text-left text-primary"><?php echo $count; ?></h1>
                                                     </div>
                                                     <div class="media col-12 col-lg-8">
                                                       <div class="row">
                                                         <p class="col-12">First Name: <?php echo $row['firstname']." ".$row['lastname']." ".$row['gfname'] ?></p>
                                                         <p class="col-12 col-lg-6">ID No: <?php echo $row['idno'] ?></p>
                                                         <p class="col-12 col-lg-6">Nationality: <?php echo $row['nationality'] ?></p>
                                                         <p class="col-12 col-lg-6">Region: <?php echo $row['region'] ?></p>
                                                         <p class="col-12 col-lg-6">Zone: <?php echo $row['zone'] ?></p>
                                                         <p class="col-12 col-lg-6">Woreda: <?php echo $row['woreda'] ?></p>
                                                         <p class="col-12 col-lg-6">Town: <?php echo $row['town'] ?></p>
                                                         <p class="col-12 col-lg-6">Kebele: <?php echo $row['kebele'] ?></p>
                                                         <p class="col-12 col-lg-6">Birth date: <?php echo $row['bdate'] ?></p>
                                                         <p class="col-12 col-lg-6">Gender: <?php echo $row['gender'] ?></p>
                                                       </div>
                                                     </div>
                                                     <div class="col-12 col-lg-2 my-5 py-5">
                                                       <ul class="nav nav-fill">
                                                         <li class="nav-item">
                                                           <a href="data/delete.php?id=<?php echo $row['user_id'] ?>&amp dbname=birth" class="text-danger ">Delete</a>
                                                         </li>
                                                       </ul>
                                                     </div>
                                                     <div class="col-12">
                                                       <hr>
                                                     </div>
                                                     <?php
                                                   }
                                                 }
                                               }
                                               $list=new birth();
                                            ?>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!--/.Panel 4-->
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
