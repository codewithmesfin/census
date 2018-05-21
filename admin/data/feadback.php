<?php
session_start();
include("config.php");
     function signup(){
       global $obj;
       if(isset($_POST['feadback']))
       {
       $title = mysqli_real_escape_string($obj->conn,$_POST['title']);
       $fullname = mysqli_real_escape_string($obj->conn,$_POST['fullname']);
       $feadback = mysqli_real_escape_string($obj->conn,$_POST['feadbacks']);
       $date=date("y-m-d");
       $time=date("h:m:s");

       $sql2 = "INSERT INTO `feadback` (`title`, `fullname`, `feadback`,`date`, `time`)
       VALUES ('$title', '$fullname', '$feadback', '$date', '$time');";
       $result = mysqli_query($obj->conn, $sql2) or die(mysqli_connect_error($sql2)."error");
       ?>
         <script type="text/javascript">
           alert("User Registered successfully.");
         </script>
       <?php
       header("Location:../home/newfeadback.php");

       }
     }
     signup();
?>
