<?php
session_start();
include("config.php");
     function signup(){
       global $obj;
       if(isset($_POST['update']))
       {
       $file_id=$_GET['id'];
       $first_name = mysqli_real_escape_string($obj->conn,$_POST['fname']);
       $father_name = mysqli_real_escape_string($obj->conn,$_POST['lname']);
       $idno = mysqli_real_escape_string($obj->conn,$_POST['idno']);
       $email = mysqli_real_escape_string($obj->conn,$_POST['email']);
       $phone = mysqli_real_escape_string($obj->conn,$_POST['phone']);
       $gender = mysqli_real_escape_string($obj->conn,$_POST['gender']);
       $user = mysqli_real_escape_string($obj->conn,$_POST['user_type']);
       $password = mysqli_real_escape_string($obj->conn,$_POST['password']);

       $sql_update="UPDATE user SET
                             idno='$idno',
                             firstname='$first_name',
                             lastname='$father_name',
                             phone='$phone',
                             email='$email',
                             gender='$gender',
                             priviledge='$user',
                             password='$password'
                             WHERE user_id=$file_id";
          mysqli_query($obj->conn, $sql_update) or die(mysqli_connect_error($sql_update)."error");

           ?>
             <script type="text/javascript">
               alert('user profile Edited.');
               window.location.href="../home/"
             </script>
           <?php

       }
     }
     signup();
?>
