<?php
  include("config.php");
  class Delete
  {
    public $dbname;
    public $file_id;
    function delete()
    {
      global $obj;
      $this->dbname=$_GET['dbname'];
      $this->file_id=$_GET['id'];
      $sql = "DELETE FROM $this->dbname WHERE user_id = '$this->file_id'";
      mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."error");
      ?>
        <script type="text/javascript">
          alert('File deleted.');
          window.location.href="../data.php";
        </script>
      <?php
    }
  }
  $delete=new Delete();

 ?>
