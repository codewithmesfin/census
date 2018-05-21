<?php
session_start();
include("config.php");
     function signup(){
       global $obj;
       if(isset($_POST['edit']))
       {
       $file_id=$_GET['id'];
       $first_name = mysqli_real_escape_string($obj->conn,$_POST['fname']);
       $father_name = mysqli_real_escape_string($obj->conn,$_POST['lname']);
       $idno = mysqli_real_escape_string($obj->conn,$_POST['idno']);
       $email = mysqli_real_escape_string($obj->conn,$_POST['email']);
       $phone = mysqli_real_escape_string($obj->conn,$_POST['phone']);
       $gender = mysqli_real_escape_string($obj->conn,$_POST['gender']);
       $sql_update="UPDATE admin SET
                             idno='$idno',
                             firstname='$first_name',
                             fathername='$father_name',
                             email='$email',
                             phone='$phone',
                             gender='$gender'
                             WHERE user_id=$file_id";
          mysqli_query($obj->conn, $sql_update) or die(mysqli_connect_error($sql_update)."error");

           ?>
             <script type="text/javascript">
               alert('File Edited.');
               window.location.href="../home/setting.php"
             </script>
           <?php

       }
     }
     signup();
?>
