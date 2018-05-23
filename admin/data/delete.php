<?php
  include("config.php");
  class Delete
  {
    public $file_id;
    function delete()
    {
      global $obj;
      $this->file_id=$_GET['id'];
      $sql = "DELETE FROM user WHERE user_id = '$this->file_id'";
      mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."error");
      ?>
        <script type="text/javascript">
          alert('user  deleted.');
          window.location.href="../home/";
        </script>
      <?php
    }
  }
  $delete=new Delete();

 ?>
