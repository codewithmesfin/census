<?php
include("config.php");
     function generate(){
       global $obj;
       if(isset($_POST['report']))
       {
       $title = mysqli_real_escape_string($obj->conn,$_POST['title']);
       $content = mysqli_real_escape_string($obj->conn,$_POST['content']);
       $idno = mysqli_real_escape_string($obj->conn,$_POST['idno']);
       $date=date("y-m-d");
       $time=date("h:m:s");

       $sql = "INSERT INTO `report` (`title`, `content`, `date`, `time`, `idno`)
       VALUES ('$title', '$content', '$date', '$time', '$idno');";
       $result = mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."error");
       ?>
         <script type="text/javascript">
           alert("Report generated successfully.");
           window.location.href="../generate.php";
         </script>
       <?php

       }
     }
     generate();
?>
