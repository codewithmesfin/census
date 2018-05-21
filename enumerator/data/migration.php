<?php
session_start();
include("config.php");
     function signup(){
       global $obj;
       if(isset($_POST['emigrator']))
       {
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
       $edate= mysqli_real_escape_string($obj->conn,$_POST['edate']);
       $emigratedto= mysqli_real_escape_string($obj->conn,$_POST['emigratedto']);
       $gender = mysqli_real_escape_string($obj->conn,$_POST['gender']);
       $reg_date=date("y-m-d");
       $sql ="SELECT * from emigrator WHERE idno = '$idno' AND nationality='$nationality' AND region='$region' AND zone='$zone' AND woreda='$woreda' AND town='$town' AND kebele='$kebele'";
       $user_registration=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_registration);
       if($no_rows == 0)
        {
          $sql2 = "INSERT INTO `emigrator` (`idno`, `firstname`, `lastname`, `gfname`, `nationality`, `region`, `zone`, `woreda`, `town`, `kebele`, `bdate`, `edate`, `emigratedto`, `gender`, `regdate`)
           VALUES ('$idno', '$first_name', '$father_name', '$gname', '$nationality', '$region', '$zone', '$woreda', '$town', '$kebele', '$bdate', '$edate', '$emigratedto', '$gender', '$reg_date');";
          $result = mysqli_query($obj->conn, $sql2) or die(mysqli_connect_error($sql2)."error");
          ?>
            <script type="text/javascript">
              alert("User Registered successfully.");
              window.location.href="../index.php"
            </script>
          <?php
        }
        else {
          echo "This Person is already registered.";
        }
       }
     }
     signup();
?>
