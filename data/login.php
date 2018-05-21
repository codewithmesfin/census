<?php
session_start();
include("config.php");
     function login(){
       global $obj;
       if(isset($_POST['login']))
       {
       $email = mysqli_real_escape_string($obj->conn,$_POST['email']);
       $password =mysqli_real_escape_string($obj->conn,$_POST['password']);
       $user =mysqli_real_escape_string($obj->conn,$_POST['user']);
       $sql ="SELECT * FROM `user` WHERE  email = '$email' AND password='$password' AND priviledge='$user' ";
       $user_login=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_login);
       if($no_rows==1)
        {
          $_SESSION['user_email'] = $email;
          $_SESSION['user_password'] = $password;
          if ($user=="Supervisor") {
          header("Location:../supervisor/");
          }
          if ($user=="Enumerator") {
          header("Location:../enumerator/");
          }
          if ($user=="Manager") {
          header("Location:../manager/");
          }
        }
        else {echo $email." ".$password." ".$user;
          echo "Email or Password Incorrect!";
        }
       }
     }
     login();
?>
