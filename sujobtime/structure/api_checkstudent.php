<?php
  require_once('connectDB.php');
    $tag = $_POST['tag'];
    $sql = "SELECT * FROM user WHERE type = 1";
    if($tag!=""){
      $sql.= " AND fullname LIKE '%$tag%'";
    }
  $result=$conn->query($sql);
  echo $result->num_rows;
  $conn->close();
?>