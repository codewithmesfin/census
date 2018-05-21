<?php
session_start();
include("config.php");
     function signup(){
       global $obj;
       if(isset($_POST['change']))
       {
       $file_id=$_GET['id'];
       $old = mysqli_real_escape_string($obj->conn,$_POST['old']);
       $new = mysqli_real_escape_string($obj->conn,$_POST['new']);
       $sql_update="UPDATE admin SET
                             psd='$new'
                             WHERE user_id='$file_id' AND psd='$old'";
          mysqli_query($obj->conn, $sql_update) or die(mysqli_connect_error($sql_update)."error");

           ?>
             <script type="text/javascript">
               alert('password changed.');
               window.location.href="../home/"
             </script>
           <?php

       }
     }
     signup();
?>
