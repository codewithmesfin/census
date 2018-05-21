<?php
session_start();
include("config.php");
     function signup(){
       global $obj;
       if(isset($_POST['emigrator']))
       {
       $file_id=$_GET['id'];
       $idno = mysqli_real_escape_string($obj->conn,$_POST['idno']);
       $first_name = mysqli_real_escape_string($obj->conn,$_POST['fname']);
       $father_name = mysqli_real_escape_string($obj->conn,$_POST['lname']);
       $gname = mysqli_real_escape_string($obj->conn,$_POST['gname']);
       $nationality = mysqli_real_escape_string($obj->conn,$_POST['nationality']);
       $region= mysqli_real_escape_string($obj->conn,$_POST['region']);
       $zone= mysqli_real_escape_string($obj->conn,$_POST['zone']);
       $woreda= mysqli_real_escape_string($obj->conn,$_POST['woreda']);
       $town= mysqli_real_escape_string($obj->conn,$_POST['town']);
       $kebele= mysqli_real_escape_string($obj->conn,$_POST['kebele']);
       $bdate= mysqli_real_escape_string($obj->conn,$_POST['bdate']);
       $edate= mysqli_real_escape_string($obj->conn,$_POST['bdate']);
       $emigratedto= mysqli_real_escape_string($obj->conn,$_POST['emigratedto']);
       $gender = mysqli_real_escape_string($obj->conn,$_POST['gender']);
       $reg_date=date("y-m-d");
       $sql_update="UPDATE emigrator SET
                             idno='$idno',
                             firstname='$first_name',
                             lastname='$father_name',
                             gfname='$gname',
                             nationality='$nationality',
                             region='$region',
                             zone='$zone',
                             woreda='$woreda',
                             town='$town',
                             kebele='$kebele',
                             bdate='$bdate',
                             edate=$edate,
                             emigratedto='$emigratedto',
                             gender='$gender',
                             regdate='$reg_date'
                             WHERE user_id=$file_id";
          mysqli_query($obj->conn, $sql_update) or die(mysqli_connect_error($sql_update)."error");

           ?>
             <script type="text/javascript">
               alert('File Edited.');
               window.location.href="../data.php"
             </script>
           <?php

       }
     }
     signup();
?>
