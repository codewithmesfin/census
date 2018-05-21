<?php
session_start();
include("config.php");
     function login(){
       global $obj;
       if(isset($_POST['login']))
       {
       $email = mysqli_real_escape_string($obj->conn,$_POST['email']);
       $password =mysqli_real_escape_string($obj->conn,$_POST['password']);
       $sql ="SELECT * from admin WHERE email = '$email' AND psd='$password'";
       $user_login=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_login);
       if($no_rows==1)
        {
          $_SESSION['admin_email'] = $email;
          $_SESSION['admin_password'] = $password;
          header("Location:../home/");
        }
        else {
          echo "Email or Password Incorrect!";
        }
       }
     }
     login();
?>
