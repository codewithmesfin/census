<?php
session_start();
include("config.php");
     function signup(){
       global $obj;
       if(isset($_POST['register']))
       {
       $first_name = mysqli_real_escape_string($obj->conn,$_POST['fname']);
       $father_name = mysqli_real_escape_string($obj->conn,$_POST['lname']);
       $idno = mysqli_real_escape_string($obj->conn,$_POST['idno']);
       $email = mysqli_real_escape_string($obj->conn,$_POST['email']);
       $phone = mysqli_real_escape_string($obj->conn,$_POST['phone']);
       $gender = mysqli_real_escape_string($obj->conn,$_POST['gender']);
       $user = mysqli_real_escape_string($obj->conn,$_POST['user_type']);
       $password = mysqli_real_escape_string($obj->conn,$_POST['password']);
       $user_image="default.jpg";
       $reg_date=date("y-m-d");
       $last_login=date("y-m-d");
       $last_login_time=date("h:m:s");
       $status="unverified";
       $sql ="SELECT email from user WHERE email = '$email' AND password='$password'";
       $user_registration=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_registration);
       if($no_rows == 0)
        {
          $sql2 = "INSERT INTO `user` (`firstname`, `lastname`, `idno`, `phone`, `email`, `gender`, `priviledge`, `password`, `reg_date`, `lastlogindate`, `lastlogintime`, `status`)
          VALUES ('$first_name', '$father_name', '$idno', '$phone', '$email', '$gender', '$user', '$password', '$reg_date', '$last_login', '$last_login_time', '$status');";
          $result = mysqli_query($obj->conn, $sql2) or die(mysqli_connect_error($sql2)."error");
          $_SESSION['admin_email'] = $email;
          $_SESSION['admin_password'] = $password;
          ?>
            <script type="text/javascript">
              alert("User Registered successfully.");
            </script>
          <?php
          header("Location:../home/");
        }
        else {
          echo "This Email is already registered.";
        }
       }
     }
     signup();
?>
