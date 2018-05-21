<?php
session_start();
include("config.php");
     function signup(){
       global $obj;
       if(isset($_POST['signup']))
       {
       $first_name = mysqli_real_escape_string($obj->conn,$_POST['fname']);
       $father_name = mysqli_real_escape_string($obj->conn,$_POST['lname']);
       $idno = mysqli_real_escape_string($obj->conn,$_POST['idno']);
       $email = mysqli_real_escape_string($obj->conn,$_POST['email']);
       $phone = mysqli_real_escape_string($obj->conn,$_POST['phone']);
       $gender = mysqli_real_escape_string($obj->conn,$_POST['gender']);
       $user = mysqli_real_escape_string($obj->conn,$_POST['user']);
       $password = mysqli_real_escape_string($obj->conn,$_POST['password']);
       $user_image="default.jpg";
       $reg_date=date("y-m-d");
       $last_login=date("y-m-d");
       $status="unverified";
       $sql ="SELECT email from admin WHERE email = '$email' AND psd='$password' AND user='$user'";
       $user_registration=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_registration);
       if($no_rows == 0)
        {
          $sql2 = "INSERT INTO `admin` (`firstname`, `fathername`, `idno`, `email`,
            `phone`, `gender`, `user`, `psd`, `user_image`, `reg_date`, `last_login`,
            `status`) VALUES ('$first_name', '$father_name', '$idno', '$email', '$phone',
            '$gender', '$user', '$password', '$user_image', '$reg_date', '$last_login', '$status');";
          $result = mysqli_query($obj->conn, $sql2) or die(mysqli_connect_error($sql2)."error");
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
        else {
          echo "This Email is already registered.";
        }
       }
     }
     signup();
?>
